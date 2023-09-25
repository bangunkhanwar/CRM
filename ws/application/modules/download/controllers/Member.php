<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('master/member_model');
		$this->load->model('master/file_upload_model');
		$this->load->model('master/activity_log_model');
		$this->load->model('master/merchant_partner_model');
	}
	
	public function index()
	{
		echo "mbr";
	}
	
	public function download_member($membercode)
	{
		$where['MemberCode'] = $membercode;
		$this->member_model->set_where($where);
		$data = $this->member_model->get_list();
		
		$dataType = gettype($data);
		
		if ($dataType == 'object') 
		{
			// object, OK
			$data_xml = 'as';
			$data_xml = $this->gen_xml($data,$this->member_model);
			echo 'SUCCES#'.$data_xml;
		} 
		else
		{
			// no found
			echo 'GAGAL!#';
		}
	}
	
	public function download_fileupload($idFileUpload)
	{
		$where['idFileUpload'] = $idFileUpload;
		$this->file_upload_model->set_where($where);
		$data = $this->file_upload_model->get_list();
		
		$dataType = gettype($data);
		
		if ($dataType == 'object') 
		{
			// object, OK
			$data_xml = 'as';
			$data_xml = $this->gen_xml($data,$this->file_upload_model);
			echo 'SUCCES#'.$data_xml;
		} 
		else
		{
			// no found
			echo 'GAGAL!#';
		}
	}
	
	public function get_member($membercode='')
	{
		$initmerchant = strtoupper(substr($membercode,0,3));		
		$where_merchant =array();
		$where_merchant['tbl."MerchantPartnerCode"']= $initmerchant;
		$merchant_partner = $this->merchant_partner_model->get($where_merchant);
		// $this->merchant_partner_model->set_where($where);
		// $merchant_partner_count = $this->merchant_partner_model->count();

		if(!$membercode)
		{
			echo '#FAILED params 1 is empty';
			die;
		}
		// echo $membercode;
		// header('Content-Type: application/json');	
		$where =array();
		// if ($merchant_partner_count > 0){
		if ($merchant_partner['MerchantPartnerCode']){
			$where['(tbl."MemberCodeMerchantPartner" = \''.$membercode.'\')']= null;
		}else{		
			$where['(
				tbl."MemberCode" = \''.$membercode.'\'
				OR tbl."Handpone" = \''.$membercode.'\' 
				OR tbl."Barcode" = \''.$membercode.'\'
			)']= null;
		}
		$member_data = $this->member_model->get($where);
		
		$member_code_search = $member_data['MemberCode'];
		if($member_data['MemberCode']=='')
		{
			// cek ke beON
			$where_cust['(
				tbl."CustCode" = \''.$membercode.'\'
				OR tbl."HP" = \''.$membercode.'\' 
				OR tbl."BarCode" = \''.$membercode.'\'
			)']= null;
			$this->load->model('master/customer_model');
			$member_beon = $this->customer_model->get($where_cust);
			// echo $this->customer_model->db->last_query();die;
			if($member_beon['CustCode']=='')
			{
				echo 'SUCCES#empty';
				die;
			}
			$data_user_crm = array();			
			$data_user_crm['fidMemberCategory']	= $member_beon['CustCatCode'];
			$data_user_crm['MemberCode']		= $member_beon['CustCode'];
			$data_user_crm['Name']				= $member_beon['Name'];
			$data_user_crm['Password']			= $member_beon['Password'];
			$data_user_crm['RegistrationDate']	= $member_beon['RegDate'];
			$data_user_crm['CityOfBirth']		= $member_beon['CityOfBirth'];
			$data_user_crm['DateOfBirth']		= $member_beon['DateOfBirth'];
			$data_user_crm['IdCardNumber']		= $member_beon['IDCardNum'];
			$data_user_crm['Address']			= $member_beon['Address'];
			$data_user_crm['RT']				= $member_beon['RT'];
			$data_user_crm['RW']				= $member_beon['RW'];
			$data_user_crm['PosCode']			= $member_beon['PosCode'];
			$data_user_crm['City']				= $member_beon['City'];
			$data_user_crm['Phone']				= $member_beon['Phone'];
			$data_user_crm['Handpone']			= $member_beon['HP'];
			$data_user_crm['Email']				= $member_beon['Email'];
			$data_user_crm['StoreCode']			= $member_beon['StoreCode'];
			$data_user_crm['ValidUntil']		= $member_beon['ValidUntil'];
			$data_user_crm['CreatedDate']		= $member_beon['CreateDate'];
			$data_user_crm['CreatedBy']			= $member_beon['CreateBy'];
			$data_user_crm['ModifiedDate']		= $member_beon['ModifDate'];
			$data_user_crm['ModifiedBy']		= $member_beon['ModifBy'];
			$data_user_crm['Sex']				= $member_beon['Sex'];
			$data_user_crm['Married']			= $member_beon['Married'];
			$data_user_crm['Barcode']			= $member_beon['BarCode'];
			$data_user_crm['LastUpdate']		= $member_beon['LastUpdate'];
			$data_user_crm['isActive']			= $member_beon['isActive'];

			$save_user_crm = $this->member_model->save(array_filter($data_user_crm));
				
			$data_log['MemberCode']	= $member_beon['CustCode'];		
			$data_log['TabelName'] 	= 'member';
			$data_log['LogType'] 	= 'Download User beON to CRM';
			$data_log['Value'] 	    = $member_beon['CustCode'];
			$data_log['fidActivityLogType'] 	    = 5;
			$save = $this->activity_log_model->saveTo($data_log);
			
			$member_code_search = $member_beon['CustCode'];
		}
		
		$this->member_model->set_where(array('tbl.MemberCode'=>$member_code_search));
		$data_member = $this->member_model->get_list_pos($member_data['MemberCode']); 
		
		// echo $this->db->last_query();
		// die;
		if ($data_member->num_rows() > 0)
		{ 
		$data_xml=
'<?xml version = "1.0" encoding="Windows-1252" standalone="yes"?>
<VFPData>	
	<xsd:schema id="VFPData" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:msdata="urn:schemas-microsoft-com:xml-msdata">
		<xsd:element name="VFPData" msdata:IsDataSet="true">
			<xsd:complexType>
				<xsd:choice maxOccurs="unbounded">
					<xsd:element name="Member" minOccurs="0" maxOccurs="unbounded">
						<xsd:complexType>
							<xsd:sequence>
								<xsd:element name="fidMemberCategory" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="2"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="MemberCode" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="11"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="IdCardNumber" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="20"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Name" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="50"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Password" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="32"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="RegistrationDate" type="xsd:date" minOccurs="0"/>
								<xsd:element name="CityOfBirth" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="20"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="DateOfBirth" type="xsd:date" minOccurs="0"/>
								<xsd:element name="Address" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="250"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="RT" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="5"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="RW" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="5"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Village" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="25"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="District" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="25"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="City" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="25"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Provinces" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="25"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="PosCode" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="6"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Phone" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="30"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Handpone" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="30"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Email" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="30"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Sex" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="Married" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="CreatedBy" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="50"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="CreatedDate" type="xsd:dateTime" minOccurs="0"/>
										<xsd:element name="ModifiedBy" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="50"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ModifiedDate" type="xsd:dateTime" minOccurs="0"/>
										<xsd:element name="LastUpdate" type="xsd:dateTime" minOccurs="0"/>
										<xsd:element name="isActive" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="StoreCode" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="4"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ValidUntil" type="xsd:date" minOccurs="0"/>
								<xsd:element name="Barcode" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="20"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="fIdFileUpload" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="OTP" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="6"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FullName" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="255"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FileServerName" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="100"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FileType" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="20"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FilePath" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="100"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FileExt" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="10"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FileSize" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="10"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="IsImage" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ImageWidth" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ImageHeight" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ImageType" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="10"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="ImageSizeStr" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="10"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="FileName" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="100"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="UploadBy" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="50"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="UseFor" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="idFileUpload" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="TotalPoints" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:decimal">
											<xsd:totalDigits value="20"/>
											<xsd:fractionDigits value="0"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="MerchantPartnerCode" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="30"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
								<xsd:element name="MemberCodeMerchantPartner" minOccurs="0">
									<xsd:simpleType>
										<xsd:restriction base="xsd:string">
											<xsd:maxLength value="30"/>
										</xsd:restriction>
									</xsd:simpleType>
								</xsd:element>
							</xsd:sequence>
							</xsd:complexType>
					</xsd:element>
				</xsd:choice>
				<xsd:anyAttribute namespace="http://www.w3.org/XML/1998/namespace" processContents="lax"/>
			</xsd:complexType>
		</xsd:element>
	</xsd:schema>';
	foreach($data_member->result_array()as $row){
		$data_xml .=	
		'<crsoheader>
			<fidMemberCategory>'.$row['fidMemberCategory'].'</fidMemberCategory>
			<MemberCode>'.$row['MemberCode'].'</MemberCode>
			<IdCardNumber>'.$row['IdCardNumber'].'</IdCardNumber>
			<Name>'.$row['Name'].'</Name>
			<Password>'.$row['Password'].'</Password>
			<RegistrationDate>'.$row['RegistrationDate'].'</RegistrationDate>
			<CityOfBirth>'.$row['CityOfBirth'].'</CityOfBirth>
			<DateOfBirth>'.$row['DateOfBirth'].'</DateOfBirth>
			<Address>'.$row['Address'].'</Address>
			<RT>'.$row['RT'].'</RT>
			<RW>'.$row['RW'].'</RW>
			<Village>'.$row['Village'].'</Village>
			<District>'.$row['District'].'</District>
			<City>'.$row['City'].'</City>
			<Provinces>'.$row['Provinces'].'</Provinces>
			<PosCode>'.$row['PosCode'].'</PosCode>
			<Phone>'.$row['Phone'].'</Phone>
			<Handpone>'.$row['Handpone'].'</Handpone>
			<Email>'.$row['Email'].'</Email>
			<Sex>'.$row['Sex'].'</Sex>
			<Married>'.$row['Married'].'</Married>
			<CreatedBy>'.$row['CreatedBy'].'</CreatedBy>
			<CreatedDate>'.$row['CreatedDate'].'</CreatedDate>
			<ModifiedBy>'.$row['ModifiedBy'].'</ModifiedBy>
			<ModifiedDate>'.$row['ModifiedDate'].'</ModifiedDate>
			<LastUpdate>'.$row['LastUpdate'].'</LastUpdate>
			<isActive>'.$row['isActive'].'</isActive>
			<StoreCode>'.$row['StoreCode'].'</StoreCode>
			<ValidUntil>'.$row['ValidUntil'].'</ValidUntil>
			<Barcode>'.$row['Barcode'].'</Barcode>
			<fIdFileUpload>'.$row['fIdFileUpload'].'</fIdFileUpload>
			<OTP>'.$row['OTP'].'</OTP>
			<FullName>'.$row['FullName'].'</FullName>
			<FileServerName>'.$row['FileServerName'].'</FileServerName>
			<FileType>'.$row['FileType'].'</FileType>
			<FilePath>'.$row['FilePath'].'</FilePath>
			<FileExt>'.$row['FileExt'].'</FileExt>
			<FileSize>'.$row['FileSize'].'</FileSize>
			<IsImage>'.$row['IsImage'].'</IsImage>
			<ImageWidth>'.$row['ImageWidth'].'</ImageWidth>
			<ImageHeight>'.$row['ImageHeight'].'</ImageHeight>
			<ImageType>'.$row['ImageType'].'</ImageType>
			<ImageSizeStr>'.$row['ImageSizeStr'].'</ImageSizeStr>
			<FileName>'.$row['FileName'].'</FileName>
			<UploadBy>'.$row['UploadBy'].'</UploadBy>
			<UseFor>'.$row['UseFor'].'</UseFor>
			<idFileUpload>'.$row['idFileUpload'].'</idFileUpload>
			<TotalPoints>'.$row['TotalPoints'].'</TotalPoints>
			<MerchantPartnerCode>'.$row['MerchantPartnerCode'].'</MerchantPartnerCode>
			<MemberCodeMerchantPartner>'.$row['MemberCodeMerchantPartner'].'</MemberCodeMerchantPartner>
		</crsoheader>';
	}
$data_xml .='</VFPData>';
			echo 'SUCCES#'.$data_xml;
		}else
		{
			echo 'SUCCES#empty';
		}
		
	}
	
	public function get_merchant_partner()
	{
		
		$where['1=1']= null;
		$this->merchant_partner_model->get($where);
		$merchant_partner = $this->merchant_partner_model->get_list();
		
		// echo $this->db->last_query();
		// die;
		if ($merchant_partner->num_rows() > 0)
		{ 
			$data_xml = 'as';
			$data_xml = $this->gen_xml($merchant_partner,$this->merchant_partner_model,'public');
			echo 'SUCCES#'.$data_xml;
	
		}
		
		
	}
}
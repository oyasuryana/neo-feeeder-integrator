<?php namespace App\Models;use CodeIgniter\Model;class MBiodata extends Model{protected$DBGroup='default';protected$table='data_mahasiswa';protected$primaryKey='id_ajuan_mahasiswa';protected$useAutoIncrement=true;protected$insertID=0;protected$returnType='array';protected$useSoftDeletes=false;protected$protectFields=true;protected$allowedFields=['id_mahasiswa ','nama_mahasiswa','tempat_lahir','tanggal_lahir','jenis_kelamin','id_agama','id_jenis_tinggal','id_alat_transportasi','kewarganegaraan','nik','nisn','nama_negara','tgl_persetujuan','status_ajuan'];protected$useTimestamps=false;protected$dateFormat='datetime';protected$createdField='created_at';protected$updatedField='updated_at';protected$deletedField='deleted_at';protected$validationRules=[];protected$validationMessages=[];protected$skipValidation=false;protected$cleanValidationRules=true;protected$allowCallbacks=true;protected$beforeInsert=[];protected$afterInsert=[];protected$beforeUpdate=[];protected$afterUpdate=[];protected$beforeFind=[];protected$afterFind=[];protected$beforeDelete=[];protected$afterDelete=[];}
?>
<?php

class Dashboard_model extends CI_Model
{
	public function get_report_by_coa()
	{
		$hasil = $this->db->query("SELECT
			X.vc_tahun AS vc_tahun,
			x.vc_perubahan AS vc_perubahan,
			x.vc_coa_id,
			z.vc_coa_code,
			z.vc_coa_name,
			x.nu_nominal,
			y.nu_pengajuan,
			( y.nu_pengajuan / x.nu_nominal )*100 AS prtus,
			y.vc_approved 
			FROM
			(
			SELECT
				a.vc_tahun,
				a.vc_perubahan,
				a.vc_coa_id,
				sum( a.nu_nominal ) AS nu_nominal 
			FROM
				mst_budget a 
			WHERE
				vc_perubahan = ( SELECT MAX( vc_perubahan ) FROM mst_budget ) 
			GROUP BY
				a.vc_tahun,
				a.vc_coa_id 
			) X
			LEFT JOIN (
			SELECT
				a.vc_id_coa,
				sum( a.nu_pengajuan ) AS nu_pengajuan,
				b.vc_approved 
			FROM
				tr_nota_dinas a
				LEFT JOIN tr_approve b ON a.nu_id = b.vc_doc_id 
				AND b.vc_doc_type = 'nota_dinas' 
			GROUP BY
				a.vc_id_coa UNION ALL
			SELECT
				a.vc_id_coa,
				sum( a.nu_pengajuan ) AS nu_pengajuan,
				b.vc_approved 
			FROM
				tr_surat_tugas a
				LEFT JOIN tr_approve b ON a.nu_id = b.vc_doc_id 
				AND b.vc_doc_type = 'surat_tugas' 
			GROUP BY
				a.vc_id_coa 
			) Y ON X.vc_coa_id = Y.vc_id_coa
			LEFT JOIN mst_coa Z ON x.vc_coa_id = z.nu_id");
		return $hasil->result_array();
	}

	public function get_report_insentif()
	{
		$hasil = $this->db->query("SELECT
			a.nu_id,
			a.vc_register,
			dt_register,
			a.vc_prihal,
			a.vc_skpd,
			a.vc_jabatan,
			a.nu_kegiatan,
			a.nu_honorarium,
			a.vc_keterangan,
			sum( b.nu_nominal ) AS jml_uang,
			sum( b.nu_qty ) AS nu_qty,
			sum( nu_pph21 ) AS pph21 
			FROM
			tr_hd_insentif a
			LEFT JOIN tr_dt_insentif b ON a.nu_id = b.nu_id_hd_insentif 
			GROUP BY
			a.nu_id");
		return $hasil->result_array();
	}
}

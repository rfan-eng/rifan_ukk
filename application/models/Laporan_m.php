<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan_m extends CI_Model {

        public function get_laporan($dari = '', $sampai = '', $id_paket = '', $id_outlet = '')
        {
                if ($dari != '') {
                        $this->db->where('DATE(tgl) >=', $dari);
                        $this->db->where('DATE(tgl) <=', $sampai);
                }

                if ($id_paket != '') {
                        $this->db->where('tb_paket.id_paket', $id_paket);
                }

                if ($id_outlet != '') {
                        $this->db->where('tb_outlet.id_outlet', $id_outlet);
                }
                

                $this->db->select('
                DATE(tgl) as tgl,
                tb_outlet.nama as nama_outlet,
                tb_member.nama,
                nama_paket,
                harga,
                SUM(qty) as terjual,
                harga * SUM(qty) as pendapatan
                ');
                $this->db->join('tb_member', 'id_member', 'left');
                $this->db->join('tb_outlet', 'id_outlet', 'left');
                $this->db->join('det_transaksi', 'id_transaksi', 'left');
                $this->db->join('tb_paket', 'det_transaksi.id_paket = tb_paket.id_paket', 'left');
                $this->db->group_by('tb_paket.id_paket, tb_outlet.id_outlet, DATE(tgl)');
        return $this->db->get('tb_transaksi')->result_array();
        }

        public function pdf() 
        {
                $this->db->select('*, tb_member.nama as nama_member, tb_outlet.nama as nama_outlet');
                $this->db->join('tb_member', 'tb_member.id_member=tb_transaksi.id_member');
                $this->db->join('det_transaksi', 'det_transaksi.id_transaksi=tb_transaksi.id_transaksi');
                $this->db->join('tb_paket', 'tb_paket.id_paket=det_transaksi.id_paket');
                $this->db->join('tb_outlet', 'tb_outlet.id_outlet=tb_transaksi.id_outlet');
                return $this->db->get('tb_transaksi');
        }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkSheetImportModel extends Model
{
    protected $table            = 'worksheet_import';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'no_ws',
        'no_aju',
        'tgl_aju',
        'no_po',
        'io_number',
        'pib_nopen',
        'tgl_nopen',
        'tgl_sppb',
        'shipper',
        'consignee',
        'notify_party',
        'vessel',
        'no_voyage',
        'pol',
        'terminal',
        'shipping_line',
        'commodity',
        'party',
        'jenis_con',
        'qty',
        'net',
        'gross',
        'bl',
        'tgl_bl',
        'master_bl',
        'tgl_master',
        'no_invoice',
        'tgl_invoice',
        'eta',
        'do',
        'tgl_mati_do',
        'asuransi',
        'top',
        'berita_acara',
        'status',
        'created_at',
        'updated_at',
        'deleted_by',
        'deleted_at',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    /**
     * Mapping data dari booking_job ke worksheet_import
     */
    public function mapFromBooking(array $booking): array
    {
        return [
            'no_ws'         => $booking['no_job'] ?? null,
            'no_aju'        => $booking['no_pib_po'] ?? null,
            'consignee'     => $booking['consignee'] ?? null,
            'party'         => $booking['party'] ?? null,
            'eta'           => $booking['eta'] ?? null,
            'pol'           => $booking['pol'] ?? null,
            'bl'            => $booking['bl'] ?? null,
            'master_bl'     => $booking['master_bl'] ?? null,
            'shipping_line' => $booking['shipping_line'] ?? null,
            'status'        => 'not completed',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ];
    }

    /**
     * Format row untuk list (misalnya DataTables / API JSON)
     */
    public function formatListRow(array $r): array
    {
        return [
            'id'            => $r['id'],
            'no_ws'         => $r['no_ws'],
            'no_aju'        => $r['no_aju'] ?? null,
            'consignee'     => $r['consignee'] ?? null,
            'party'         => $r['party'] ?? null,
            'eta'           => $r['eta'] ?? null,
            'pol'           => $r['pol'] ?? null,
            'shipping_line' => $r['shipping_line'] ?? null,
            'bl'            => $r['bl'] ?? null,
            'master_bl'     => $r['master_bl'] ?? null,
            'status'        => $r['status'] ?? 'not completed',
            'created_at'    => $r['created_at'] ?? null,
        ];
    }
}

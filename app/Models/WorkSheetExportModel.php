<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkSheetExportModel extends Model
{
    protected $table            = 'worksheet_export';
    protected $primaryKey       = 'id';
    protected $allowedFields    = [
        'no_ws',
        'no_aju',
        'no_peb',
        'tgl_peb',
        'shipper',
        'consignee',
        'vessel',
        'no_voyage',
        'pol',
        'pod',
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
        'etd',
        'eta',
        'asuransi',
        'top',
        'berita_acara',
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
     * Mapping data dari booking_job ke worksheet_export
     */
    public function mapFromBooking(array $booking): array
    {
        return [
            'no_ws'         => $booking['no_job'] ?? null,
            'no_aju'        => $booking['no_pib_po'] ?? null,
            'shipper'       => $booking['consignee'] ?? null,
            'party'         => $booking['party'] ?? null,
            'etd'           => $booking['eta'] ?? null,
            'pod'           => $booking['pol'] ?? null,
            'bl'            => $booking['bl'] ?? null,
            'master_bl'     => $booking['master_bl'] ?? null,
            'shipping_line' => $booking['shipping_line'] ?? null,
            'status'        => 'not complete',
            'created_at'    => date('Y-m-d H:i:s'),
            'updated_at'    => date('Y-m-d H:i:s')
        ];
    }

    /**
     * Format row untuk list worksheet export
     */
    public function formatListRow(array $r): array
    {
        return [
            'id'            => $r['id'],
            'no_ws'         => $r['no_ws'] ?? null,
            'no_aju'        => $r['no_aju'] ?? null,
            'shipper'       => $r['shipper'] ?? null,
            'consignee'     => $r['consignee'] ?? null,
            'party'         => $r['party'] ?? null,
            'pod'           => $r['pod'] ?? null,
            'bl'            => $r['bl'] ?? null,
            'master_bl'     => $r['master_bl'] ?? null,
            'vessel'        => $r['vessel'] ?? null,
            'shipping_line' => $r['shipping_line'] ?? null,
            'etd'           => $r['etd'] ?? null,
            'status'        => $r['status'] ?? 'not completed',
            'created_at'    => $r['created_at'] ?? null,
        ];
    }
}

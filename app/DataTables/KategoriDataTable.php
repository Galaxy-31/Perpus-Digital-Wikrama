<?php

namespace App\DataTables;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    protected $model;
    protected $view;

    public function __construct()
    {
        $this->view = "index";
        $this->path = "kategoris";
    }

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('iteration', function ($query) {
                static $i = 1;
                return $i++;
            })
            ->addColumn('action', function ($query) {
                $kategori = $query;
                return view('kategoris.action', compact('kategori'));
            })
            ->rawColumns(['name','action']);
    }

    public function query(Kategori $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html()
    {
        return $this->builder()
       
        ->setTableId('kategoris-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->dom('Bfrtip')
        ->orderBy(1)
        ->buttons(['export']);
}


    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            [
                'name' => 'iteration',
                'title' => 'No',
                'data' => 'iteration',
                'width' => '5%',
                'orderable' => false,
            ],
            [
                'name' => 'idkategori',
                'title' => 'ID Kategori',
                'data' => 'idkategori',
                'width' => '30%',
            ],
            [
                'name' => 'kategori',
                'title' => 'Kategori',
                'data' => 'kategori',
                'width' => '30%',
            ],
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    } 
}

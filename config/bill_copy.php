<?php

return [
    'model' => 'App\Models\EL\ApplicationJournal',
    'column'   => 'invoice_pdf_path',
    'use_function_for_getter' => true,
    'function_name' => 'getGeneratedBillPdfPath',
    'function_is_static' => true,
    'asset_prefix_directory'    => env('ASSET_STORAGE_PATH', 'assets/uploads').'/',
];
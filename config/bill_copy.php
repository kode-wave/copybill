<?php

return [
    'dynamic_token' => true,
    'transaction_key'   => "mbpj#2O24@",
    'auth_token' => 'e68d0073eedef0b84eed424bf51d0b23a3f90231',
    'model' => 'App\Models\EL\ApplicationJournal',
    'primary_column' => 'id',
    'column'   => 'invoice_pdf_path',
    'use_function_for_getter' => true,
    'function_name' => 'getGeneratedBillPdfPathUrl',
    'function_is_static' => false,
    'asset_prefix_directory'    => env('ASSET_STORAGE_PATH', 'assets/uploads').'/',
];
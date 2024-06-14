<?php

namespace BillCopy\BillCopy;

use Illuminate\Support\ServiceProvider;

class BillCopyServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/bill_copy.php' => config_path('bill_copy.php'),
        ], 'bill-copy-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bill_copy.php',
            'bill_copy'
        );
    }
}
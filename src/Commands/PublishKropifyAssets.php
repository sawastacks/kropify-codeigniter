<?php

namespace SawaStacks\CodeIgniter\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class PublishKropifyAssets extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Kropify';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'publish:kropify-assets';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'This command will publish the kropify package assets to public.';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'command:name [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $path_public = FCPATH; // C:\Users\Administrator\Desktop\project-root\public\
        $path_vendor = VENDORPATH; // C:\Users\Administrator\Desktop\project-root\vendor\
        try {
            directory_mirror($path_vendor.'sawastacks/kropify-codeigniter/src/Assets',$path_public.'vendors/sawastacks/kropify/');
            CLI::write('Kropify assets have been published.', 'blue');
        } catch (\Throwable $th) {
            //throw $th;
            CLI::write('Error: '.$th, 'red');
        }
        
    }
}

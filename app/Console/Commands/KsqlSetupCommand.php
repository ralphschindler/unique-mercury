<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use SeanMorris\Ksqlc\Ksqlc;

class KsqlSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ksql:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup KSQL';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $ksqlc = new Ksqlc('http://ksqldb-server:8088/');

        $result = $ksqlc->run(<<<EOS
            CREATE TABLE products (
                id BIGINT,
                name VARCHAR,
                created_at VARCHAR,
                updated_at VARCHAR
            ) WITH (
                KAFKA_TOPIC = 'products',
                VALUE_FORMAT = 'JSON'
            )
            EOS
        );

        dump($result);

        return Command::SUCCESS;
    }
}

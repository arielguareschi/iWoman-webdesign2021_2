<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['nome'=>'Acre','uf'=>'AC']);
        Estado::create(['nome'=>'Alagoas','uf'=>'AL']);
        Estado::create(['nome'=>'Amazonas','uf'=>'AM']);
        Estado::create(['nome'=>'Amapá','uf'=>'AP']);
        Estado::create(['nome'=>'Bahia','uf'=>'BA']);
        Estado::create(['nome'=>'Ceará','uf'=>'CE']);
        Estado::create(['nome'=>'Distrito Federal','uf'=>'DF']);
        Estado::create(['nome'=>'Espírito Santo','uf'=>'ES']);
        Estado::create(['nome'=>'Goiás','uf'=>'GO']);
        Estado::create(['nome'=>'Maranhão','uf'=>'MA']);
        Estado::create(['nome'=>'Minas Gerais','uf'=>'MG']);
        Estado::create(['nome'=>'Mato Grosso do Sul','uf'=>'MS']);
        Estado::create(['nome'=>'Mato Grosso','uf'=>'MT']);
        Estado::create(['nome'=>'Pará','uf'=>'PA']);
        Estado::create(['nome'=>'Paraíba','uf'=>'PB']);
        Estado::create(['nome'=>'Pernambuco','uf'=>'PE']);
        Estado::create(['nome'=>'Piauí','uf'=>'PI']);
        Estado::create(['nome'=>'Paraná','uf'=>'PR']);
        Estado::create(['nome'=>'Rio de Janeiro','uf'=>'RJ']);
        Estado::create(['nome'=>'Rio Grande do Norte','uf'=>'RN']);
        Estado::create(['nome'=>'Rondônia','uf'=>'RO']);
        Estado::create(['nome'=>'Roraima','uf'=>'RR']);
        Estado::create(['nome'=>'Rio Grande do Sul','uf'=>'RS']);
        Estado::create(['nome'=>'Santa Catarina','uf'=>'SC']);
        Estado::create(['nome'=>'Sergipe','uf'=>'SE']);
        Estado::create(['nome'=>'São Paulo','uf'=>'SP']);
        Estado::create(['nome'=>'Tocantins','uf'=>'TO']);
    }
}

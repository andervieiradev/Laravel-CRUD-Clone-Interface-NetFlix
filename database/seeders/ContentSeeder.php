<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $data = array(
            array(
                'name' => 'Round 6',
                'sinopse' => 'Endividado, Gi-hun participa de um jogo misterioso na esperança de ganhar dinheiro fácil. Mas já na primeira rodada, uma verdadeira cena de horror acontece.',
                'urlLogo' => 'https://i.ibb.co/K7fDFj0/AAAABd3sewg1-X9ii-RJQEO3kd-HRhss-J-ZD-e5-RWAp-YX9-Flp-NMKqu-Toftju-UF5c7o-LUK32-Yzm-Kuzl-Y-PHz-Gf-UY.webp',
                'urlBackground' => 'https://i.ibb.co/G20tWHp/Round6-Netflix-Serie-CDL-1920x1080-01.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/HVwbBLW/AAAABSu4-RA7-P1ef-Lp2m-KVBq4-Jq-GCm3-X2-J8a6a-Iwd-Wur7-WK-C6-M1-Fa-DZyfx1-BNe5du-Dsa-PNbb-Kk-Mxd-KH4.webp',
                'urlThumbHorizontal' => 'https://i.ibb.co/FVKwRFm/AAAABanjtdr-DOGa-Qz-Wb8-VKyy-RIJbg4o-HJPy-NWhtp-Kyx6u-Vd-Hmf5w-Mf6-Dzh-Dwv16-Fe-Yb-Z6b7-N0t-FFto5l-X.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/Ncra_hUVtMM',
                'year' => '2021',
                'maturityRating' => '18',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Orange Is the New Black',
                'sinopse' => 'Um crime cometido no passado coloca uma privilegiada nova-iorquina na prisão, onde ela faz várias amigas. E inimigas.',
                'urlLogo' => 'https://i.ibb.co/5h5N17q/e73d5aae-43e1-4ead-8a97-480fa3eddee7.webp',
                'urlBackground' => 'https://i.ibb.co/BtBQVJN/21aec2d4-0450-4363-af54-e453cc261ed0.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/dKcNQn0/e26f31da-a4c3-47d6-9741-fc6ffbe5eaca.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/vvr270v/815cf318-e0ad-497c-8664-140956396f4a.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/vY0qzXi5oJg',
                'year' => '2019',
                'maturityRating' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'A Anatomia de Grey',
                'sinopse' => 'O casamento de Jo e Alex traz dramas, grandes novidades e reviravoltas inesperadas. April encontra um propósito, Bailey reavalia tudo e Teddy está de volta.',
                'urlLogo' => 'https://i.ibb.co/kc5qccf/79c35e55-cd75-41cf-80b1-7de3709808e3.webp',
                'urlBackground' => 'https://i.ibb.co/hcFXyPy/04b96077-e61d-4384-acf8-c2373038f690.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/VM6gbBC/ce73ae8c-e0f0-4d7b-a41b-e9a9dd6d423d.webp',
                'urlThumbHorizontal' => 'https://i.ibb.co/cxDn9qx/7576cc60-9dca-443b-9d06-61477012fe08.webp',
                'urlTrailer' => 'https://www.youtube.com/embed/LiNIFDZb6BI',
                'year' => '2020',
                'maturityRating' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Brooklyn Nine-Nine',
                'sinopse' => 'A autoridade de Jake é testada durante uma caçada a um atirador. Amy busca o apoio de Rosa durante uma crise pessoal.',
                'urlLogo' => 'https://i.ibb.co/GJym69m/5a4386e2-a8ae-4894-9e38-4709d3e12234.webp',
                'urlBackground' => 'https://i.ibb.co/5Bb0Vsx/cecaf52a-3b69-4303-97ec-a126f9b833a1.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/WvNg7F1/f99d1c3c-c781-4c7d-a110-288f2b89d0f1.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/NxQ1jyb/3d3b11cd-67f9-44e4-bca0-53ae989c78de.webp',
                'urlTrailer' => 'https://www.youtube.com/embed/sEOuJ4z5aTc',
                'year' => '2020',
                'maturityRating' => '14',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Black Mirror',
                'sinopse' => 'Numa estrada deserta, uma viajante se depara com um museu. Na coleção, objetos raros do mundo do crime - e uma chocante atração principal.',
                'urlLogo' => 'https://i.ibb.co/5G8Bs4F/10729259-4e41-47e3-bb50-33ef6daf2074.webp',
                'urlBackground' => 'https://i.ibb.co/523dv33/3f12dcab-dc77-43ea-af0b-bc842e72d6fc.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/hZRsYSh/f66b8f27-d4a6-49bc-afcf-106c6a88e621.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/FstdtK0/6bb0e523-e7ce-4d61-8caf-193f67089e40.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/M8qG0vS2zWM',
                'year' => '2019',
                'maturityRating' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Breaking Bad',
                'sinopse' => 'Ao saber que tem câncer, um professor passa a fabricar metanfetamina pelo futuro da família, mudando o destino de todos.',
                'urlLogo' => 'https://i.ibb.co/LRRCgSY/6f79b861-457a-42f2-8298-54cf9da384a3.webp',
                'urlBackground' => 'https://i.ibb.co/LpP3FPx/b645efe3-d2a9-4503-bc0b-958e255a4f42.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/9ZQJdL0/aa9dfc61-89fc-4c03-a198-95d1f0964df9.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/ryjr3dc/1da3f733-e8cb-4a70-83da-b5e7aa90a781.webp',
                'urlTrailer' => 'https://www.youtube.com/embed/FH_Pm-0kuFc',
                'year' => '2013',
                'maturityRating' => '18',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Sex Education',
                'sinopse' => 'O inseguro Otis manja tudo quando o negócio é aconselhamento sexual, graças à sua mãe sexóloga. E aí a rebelde Maeve propõe criar uma clínica de terapia sexual na escola.',
                'urlLogo' => 'https://i.ibb.co/vqBqSKY/4ec25aa6-7998-49bf-9632-0ef815526cd8.webp',
                'urlBackground' => 'https://i.ibb.co/jM2qTr3/f35902a0-cf0e-483f-b4f8-74667e3740e2.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/xj28y4V/f6219a1f-ae76-4f1d-912c-162e333f6bf2.webp',
                'urlThumbHorizontal' => 'https://i.ibb.co/9cqRKzp/045715a4-2dd2-44a7-96c3-7d9b5e0b27eb.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/ccp8T3Me4f4',
                'year' => '2020',
                'maturityRating' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'O Culpado',
                'sinopse' => 'Um detetive rebaixado a operador de chamadas de emergência tenta salvar uma mulher desesperada em meio a um dia frenético cheio de revelações – e acertos de contas.',
                'urlLogo' => 'https://i.ibb.co/QnDW8FJ/3e73e4aa-b137-46f2-be1a-be848ec4ccc1.webp',
                'urlBackground' => 'https://i.ibb.co/yV6ZT6G/9bafafd6-7843-4b65-b21b-4d01443f84e7.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/sQZ2YQf/22262b44-d794-460a-a4c4-370a89463d9c.webp',
                'urlThumbHorizontal' => 'https://i.ibb.co/WDpmrs4/99968504-7e0b-418b-8f6e-ba489f378337.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/Ot-mN7qgYDI',
                'year' => '2021',
                'maturityRating' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'O Estagiário',
                'sinopse' => 'Estressada com o mundo da moda, a empresária Jules recebe ajuda e inspiração de quem menos esperava: Ben, um estagiário viúvo e septuagenário.',
                'urlLogo' => 'https://i.ibb.co/YPh0tKd/00fdc275-adee-48de-92dd-4129ccaf7a58.webp',
                'urlBackground' => 'https://i.ibb.co/GVrYd5z/d6269268-eb86-4beb-9038-77b342fecda6.jpg',
                'urlThumbVertical' => 'https://i.ibb.co/HTj8gVd/9aeee666-2e00-4c72-be74-8ed5c1e18dac.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/fvrt5xL/8990811f-64dd-42b4-badd-3d622b7ab644.webp',
                'urlTrailer' => 'https://www.youtube.com/embed/jHG8TaEBhKI',
                'year' => '2015',
                'maturityRating' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Submundo do Crime',
                'sinopse' => 'Para proteger a família de um poderoso chefão do tráfico, o habilidoso ladrão Mehdi e sua gangue acabam envolvidos em uma violenta disputa por território.',
                'urlLogo' => 'https://i.ibb.co/jDcRq4f/0b83a1a6-cd2d-4b30-9428-572cbb8cc339.webp',
                'urlBackground' => 'https://i.ibb.co/ZhZy4M1/fd942e41-e4b8-4f1e-96e3-49ff42f67dc3.webp',
                'urlThumbVertical' => 'https://i.ibb.co/9tzFhpR/568e0fc5-3ab2-4cee-aeaa-50dc7303f74f.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/Wsctk6B/4d9c815c-ed53-4dec-884c-4b118c996c4b.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/Aj0UZiWSfcE',
                'year' => '2021',
                'maturityRating' => '16',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'name' => 'Lemony Snicket: Desventuras em Série',
                'sinopse' => 'Os três órfãos Baudelaire enfrentam dificuldades, obstáculos e até adultos em sua corrida para descobrir os segredos da família.',
                'urlLogo' => 'https://i.ibb.co/0K5gbW3/12f979ee-ebd7-4fb9-a8a8-6b46ede78566.webp',
                'urlBackground' => 'https://i.ibb.co/GFHb79D/6336f923-93c1-4d0d-9a94-a50edee2eb5e.webp',
                'urlThumbVertical' => 'https://i.ibb.co/2vt8PKM/9b8c8183-a3fd-47f1-9186-cb63ac13596d.jpg',
                'urlThumbHorizontal' => 'https://i.ibb.co/sbCRrPv/46af49ef-0632-46c8-932e-7638ea5da40f.jpg',
                'urlTrailer' => 'https://www.youtube.com/embed/ybmxc6vUNk0',
                'year' => '2019',
                'maturityRating' => '12',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        );

        Content::insert($data);
    }
}

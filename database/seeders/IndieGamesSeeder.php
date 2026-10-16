<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Developer;
use App\Models\Genre;
use App\Models\Character;

class IndieGamesSeeder extends Seeder
{
    public function run()
    {
        $gamesData = [
            [
                'developer' => ['name' => 'Team Cherry', 'country' => 'Australia', 'website' => 'teamcherry.com.au'],
                'game' => [
                    'title' => 'Hollow Knight',
                    'description' => 'Una aventura épica de acción en 2D a través de un vasto reino de insectos en ruinas. Explora cavernas retorcidas, lucha contra criaturas corrompidas y hazte amigo de extraños insectos.',
                    'release_date' => '2017-02-24',
                    'engine' => 'Unity',
                    'cover_image' => 'https://tu-dominio.com/img/hollow-knight.jpg',
                ],
                'genres' => ['Metroidvania', 'Acción', 'Plataformas'],
                'characters' => [
                    ['name' => 'The Knight', 'role' => 'Protagonista', 'description' => 'Un ser silencioso, de pequeña estatura y equipado con un viejo aguijón, nacido del Vacío para contener una antigua plaga.', 'image_url' => 'https://tu-dominio.com/img/knight.jpg'],
                    ['name' => 'Hornet', 'role' => 'Jefe / Aliada', 'description' => 'La protectora de las ruinas de Hallownest, armada con una aguja e hilo. Es letal, ágil y pondrá a prueba la valía del Caballero.', 'image_url' => 'https://tu-dominio.com/img/hornet.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Extremely OK Games', 'country' => 'Canadá', 'website' => 'exok.com'],
                'game' => [
                    'title' => 'Celeste',
                    'description' => 'Ayuda a Madeline a sobrevivir a sus demonios internos en su viaje a la cima de la montaña Celeste en este juego de plataformas súper ajustado y escrito a mano.',
                    'release_date' => '2018-01-25',
                    'engine' => 'XNA / Monogame',
                    'cover_image' => 'https://tu-dominio.com/img/celeste.jpg',
                ],
                'genres' => ['Plataformas', 'Precisión', 'Aventura'],
                'characters' => [
                    ['name' => 'Madeline', 'role' => 'Protagonista', 'description' => 'Una joven canadiense que sufre de ansiedad y depresión. Decide escalar la Montaña Celeste para demostrarse a sí misma que puede lograr algo.', 'image_url' => 'https://tu-dominio.com/img/madeline.jpg'],
                    ['name' => 'Badeline', 'role' => 'Antagonista', 'description' => 'La manifestación física de la ansiedad, el pragmatismo y los miedos de Madeline, nacida del poder místico de la montaña.', 'image_url' => 'https://tu-dominio.com/img/badeline.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Supergiant Games', 'country' => 'Estados Unidos', 'website' => 'supergiantgames.com'],
                'game' => [
                    'title' => 'Hades',
                    'description' => 'Desafía al dios de los muertos y ábrete camino a tajos fuera del Inframundo en este roguelike de exploración de mazmorras de los creadores de Bastion.',
                    'release_date' => '2020-09-17',
                    'engine' => 'The Forge (Motor Propio)',
                    'cover_image' => 'https://tu-dominio.com/img/hades.jpg',
                ],
                'genres' => ['Roguelike', 'Action RPG', 'Hack and Slash'],
                'characters' => [
                    ['name' => 'Zagreo', 'role' => 'Protagonista', 'description' => 'El rebelde príncipe del Inframundo. Armado con armas míticas, busca escapar del dominio de su padre y llegar al Monte Olimpo.', 'image_url' => 'https://tu-dominio.com/img/zagreus.jpg'],
                    ['name' => 'Hades', 'role' => 'Antagonista Principal', 'description' => 'Dios del Inframundo y padre de Zagreo. Un burócrata estricto y un guerrero temible que hará todo para evitar que su hijo escape.', 'image_url' => 'https://tu-dominio.com/img/hades-char.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'ConcernedApe', 'country' => 'Estados Unidos', 'website' => 'stardewvalley.net'],
                'game' => [
                    'title' => 'Stardew Valley',
                    'description' => 'Heredaste la vieja parcela agrícola de tu abuelo. Armado con herramientas de segunda mano y algunas monedas, te dispones a comenzar tu nueva vida.',
                    'release_date' => '2016-02-26',
                    'engine' => 'XNA / Monogame',
                    'cover_image' => 'https://tu-dominio.com/img/stardew.jpg',
                ],
                'genres' => ['Simulador de Vida', 'RPG', 'Gestión'],
                'characters' => [
                    ['name' => 'El Granjero', 'role' => 'Protagonista', 'description' => 'Un ex-empleado corporativo de JoJa Corp que abandona la ciudad para revivir la granja de su abuelo en Pueblo Pelícano.', 'image_url' => 'https://tu-dominio.com/img/farmer.jpg'],
                    ['name' => 'Abigail', 'role' => 'NPC / Romanceable', 'description' => 'Una joven rebelde del pueblo interesada en el ocultismo, las espadas y explorar las minas. Famosa por "comer" cuarzos.', 'image_url' => 'https://tu-dominio.com/img/abigail.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Toby Fox', 'country' => 'Estados Unidos', 'website' => 'undertale.com'],
                'game' => [
                    'title' => 'Undertale',
                    'description' => 'Un juego de rol en el que no tienes que destruir a nadie. Sobrevive esquivando ataques en un sistema de combate único y negocia para salir del peligro.',
                    'release_date' => '2015-09-15',
                    'engine' => 'GameMaker',
                    'cover_image' => 'https://tu-dominio.com/img/undertale.jpg',
                ],
                'genres' => ['RPG', 'Bullet Hell', 'Comedia'],
                'characters' => [
                    ['name' => 'Frisk', 'role' => 'Protagonista', 'description' => 'Un niño humano que cae al Subsuelo, un reino aislado lleno de monstruos. Su determinación es su mayor arma.', 'image_url' => 'https://tu-dominio.com/img/frisk.jpg'],
                    ['name' => 'Sans', 'role' => 'NPC / Jefe Secreto', 'description' => 'Un esqueleto bajo, perezoso y amante de los chistes malos, que resulta ser uno de los seres más poderosos y perceptivos del juego.', 'image_url' => 'https://tu-dominio.com/img/sans.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Studio MDHR', 'country' => 'Canadá', 'website' => 'cupheadgame.com'],
                'game' => [
                    'title' => 'Cuphead',
                    'description' => 'Un juego de acción clásico tipo "run and gun" fuertemente enfocado en batallas contra jefes, inspirado en las caricaturas de los años 30.',
                    'release_date' => '2017-09-29',
                    'engine' => 'Unity',
                    'cover_image' => 'https://tu-dominio.com/img/cuphead.jpg',
                ],
                'genres' => ['Run and Gun', 'Acción', 'Plataformas'],
                'characters' => [
                    ['name' => 'Cuphead', 'role' => 'Protagonista', 'description' => 'Un joven con cabeza de taza, impulsivo y buscador de problemas, que pierde una apuesta con el Diablo.', 'image_url' => 'https://tu-dominio.com/img/cuphead-char.jpg'],
                    ['name' => 'The Devil', 'role' => 'Antagonista Principal', 'description' => 'El regente del Casino Inkwell. Astuto y engañoso, obliga a los hermanos a recolectar contratos de almas para saldar su deuda.', 'image_url' => 'https://tu-dominio.com/img/devil.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Motion Twin', 'country' => 'Francia', 'website' => 'deadcells.com'],
                'game' => [
                    'title' => 'Dead Cells',
                    'description' => 'Un roguelite estilo metroidvania inspirado en Castlevania. Explora un castillo en constante cambio mientras mueres, aprendes y repites.',
                    'release_date' => '2018-08-07',
                    'engine' => 'Heaps (Haxe)',
                    'cover_image' => 'https://tu-dominio.com/img/deadcells.jpg',
                ],
                'genres' => ['Roguelite', 'Metroidvania', 'Acción'],
                'characters' => [
                    ['name' => 'El Decapitado', 'role' => 'Protagonista', 'description' => 'Un experimento alquímico fallido; un cúmulo de células inmortales que toma posesión de cadáveres decapitados para luchar.', 'image_url' => 'https://tu-dominio.com/img/beheaded.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Re-Logic', 'country' => 'Estados Unidos', 'website' => 'terraria.org'],
                'game' => [
                    'title' => 'Terraria',
                    'description' => 'Cava, lucha, explora, construye. Nada es imposible en este juego de aventuras lleno de acción. El mundo es tu lienzo y la tierra tu pintura.',
                    'release_date' => '2011-05-16',
                    'engine' => 'XNA / Monogame',
                    'cover_image' => 'https://tu-dominio.com/img/terraria.jpg',
                ],
                'genres' => ['Sandbox', 'Supervivencia', 'Aventura'],
                'characters' => [
                    ['name' => 'El Guía', 'role' => 'NPC', 'description' => 'El primer NPC con el que el jugador interactúa. Ofrece consejos útiles, recetas de crafteo y guarda un oscuro secreto relacionado con el Muro de Carne.', 'image_url' => 'https://tu-dominio.com/img/guide.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Yacht Club Games', 'country' => 'Estados Unidos', 'website' => 'yachtclubgames.com'],
                'game' => [
                    'title' => 'Shovel Knight',
                    'description' => 'Un juego de acción y aventuras arrollador con una jugabilidad increíble, personajes memorables y una estética retro de 8 bits.',
                    'release_date' => '2014-06-26',
                    'engine' => 'Motor Propio',
                    'cover_image' => 'https://tu-dominio.com/img/shovel-knight.jpg',
                ],
                'genres' => ['Plataformas', 'Acción', 'Retro'],
                'characters' => [
                    ['name' => 'Shovel Knight', 'role' => 'Protagonista', 'description' => 'Un pequeño caballero con una enorme misión. Viaja por la tierra empuñando su fiel Shovel Blade (Pala-Espada) para rescatar a su compañera.', 'image_url' => 'https://tu-dominio.com/img/shovel-char.jpg'],
                    ['name' => 'La Hechicera', 'role' => 'Antagonista Principal', 'description' => 'Una entidad oscura que controla a la Orden Sin Cuartel, habiendo poseído trágicamente a Shield Knight.', 'image_url' => 'https://tu-dominio.com/img/enchantress.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Askiisoft', 'country' => 'Estados Unidos', 'website' => 'katanazero.com'],
                'game' => [
                    'title' => 'Katana ZERO',
                    'description' => 'Un trepidante plataformas de acción neo-noir centrado en combates acrobáticos que recompensan la muerte instantánea y la manipulación del tiempo.',
                    'release_date' => '2019-04-18',
                    'engine' => 'GameMaker',
                    'cover_image' => 'https://tu-dominio.com/img/katana-zero.jpg',
                ],
                'genres' => ['Acción', 'Plataformas', 'Neo-noir'],
                'characters' => [
                    ['name' => 'Subject Zero', 'role' => 'Protagonista', 'description' => 'Un asesino amnésico y veterano de la Guerra Cromañón, dependiente de la droga Chronos que le otorga habilidades de precognición.', 'image_url' => 'https://tu-dominio.com/img/zero.jpg'],
                    ['name' => 'El Psiquiatra', 'role' => 'NPC / Jefe', 'description' => 'El frío supervisor de Zero. Le asigna sus contratos de asesinato y le suministra la droga Chronos tras unas breves sesiones de terapia.', 'image_url' => 'https://tu-dominio.com/img/psychiatrist.jpg'],
                ]
            ]
        ];

        // Procesar los datos
        foreach ($gamesData as $data) {
            // 1. Crear o buscar el Desarrollador (evita duplicados)
            $developer = Developer::firstOrCreate(
                ['name' => $data['developer']['name']],
                [
                    'country' => $data['developer']['country'],
                    'website' => $data['developer']['website']
                ]
            );

            // 2. Crear el Juego y vincularlo al desarrollador
            $game = Game::create(array_merge($data['game'], [
                'developer_id' => $developer->id
            ]));

            // 3. Crear o buscar Géneros y vincularlos al Juego (Tabla Pivote)
            $genreIds = [];
            foreach ($data['genres'] as $genreName) {
                $genre = Genre::firstOrCreate(['name' => $genreName]);
                $genreIds[] = $genre->id;
            }
            $game->genres()->sync($genreIds);

            // 4. Crear los Personajes vinculados al Juego
            foreach ($data['characters'] as $charData) {
                Character::create(array_merge($charData, [
                    'game_id' => $game->id
                ]));
            }
        }
    }
}

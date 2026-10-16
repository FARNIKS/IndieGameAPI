<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Developer;
use App\Models\Engine;
use App\Models\Genre;
use App\Models\Platform;
use App\Models\Game;
use App\Models\Character;

class IndieGamesSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Asegurar catálogo inicial de Motores Gráficos (Incluyendo Godot)
        $engines = [
            'Godot',
            'Unity',
            'GameMaker',
            'XNA / Monogame',
            'The Forge (Propio)',
            'Heaps (Haxe)',
            'Motor Propio (Custom)'
        ];

        foreach ($engines as $engineName) {
            Engine::firstOrCreate(['name' => $engineName]);
        }

        // 2. Estructura Completa de Juegos Normalizados
        $gamesData = [
            [
                'developer' => ['name' => 'Team Cherry', 'country' => 'Australia', 'website' => 'teamcherry.com.au'],
                'engine' => 'Unity',
                'game' => [
                    'title' => 'Hollow Knight',
                    'description' => 'Una aventura épica de acción en 2D a través de un vasto reino de insectos en ruinas. Explora cavernas retorcidas, lucha contra criaturas corrompidas y hazte amigo de extraños insectos.',
                    'release_date' => '2017-02-24',
                    'cover_image' => 'https://tu-dominio.com/img/hollow-knight.jpg',
                ],
                'genres' => ['Metroidvania', 'Acción', 'Plataformas'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'Xbox One'],
                'characters' => [
                    ['name' => 'The Knight', 'role' => 'Protagonista', 'description' => 'Un ser silencioso, de pequeña estatura y equipado con un viejo aguijón, nacido del Vacío para contener una antigua plaga.', 'image_url' => 'https://tu-dominio.com/img/knight.jpg'],
                    ['name' => 'Hornet', 'role' => 'Jefe / Aliada', 'description' => 'La protectora de las ruinas de Hallownest, armada con una aguja e hilo. Es letal, ágil y pondrá a prueba la valía del Caballero.', 'image_url' => 'https://tu-dominio.com/img/hornet.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Extremely OK Games', 'country' => 'Canadá', 'website' => 'exok.com'],
                'engine' => 'XNA / Monogame',
                'game' => [
                    'title' => 'Celeste',
                    'description' => 'Ayuda a Madeline a sobrevivir a sus demonios internos en su viaje a la cima de la montaña Celeste en este juego de plataformas súper ajustado y escrito a mano.',
                    'release_date' => '2018-01-25',
                    'cover_image' => 'https://tu-dominio.com/img/celeste.jpg',
                ],
                'genres' => ['Plataformas', 'Precisión', 'Aventura'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'Xbox One'],
                'characters' => [
                    ['name' => 'Madeline', 'role' => 'Protagonista', 'description' => 'Una joven canadiense que sufre de ansiedad y depresión. Decide escalar la Montaña Celeste para demostrarse a sí misma que puede lograr algo.', 'image_url' => 'https://tu-dominio.com/img/madeline.jpg'],
                    ['name' => 'Badeline', 'role' => 'Antagonista Principal', 'description' => 'La manifestación física de la ansiedad, el pragmatismo y los miedos de Madeline, nacida del poder místico de la montaña.', 'image_url' => 'https://tu-dominio.com/img/badeline.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Supergiant Games', 'country' => 'Estados Unidos', 'website' => 'supergiantgames.com'],
                'engine' => 'The Forge (Propio)',
                'game' => [
                    'title' => 'Hades',
                    'description' => 'Desafía al dios de los muertos y ábrete camino a tajos fuera del Inframundo en este roguelike de exploración de mazmorras de los creadores de Bastion.',
                    'release_date' => '2020-09-17',
                    'cover_image' => 'https://tu-dominio.com/img/hades.jpg',
                ],
                'genres' => ['Roguelike', 'Action RPG', 'Hack and Slash'],
                'platforms' => ['PC (Windows)', 'macOS', 'Nintendo Switch', 'PlayStation 4', 'PlayStation 5', 'Xbox One', 'Xbox Series X/S', 'iOS'],
                'characters' => [
                    ['name' => 'Zagreo', 'role' => 'Protagonista', 'description' => 'El rebelde príncipe del Inframundo. Armado con armas míticas, busca escapar del dominio de su padre y llegar al Monte Olimpo.', 'image_url' => 'https://tu-dominio.com/img/zagreus.jpg'],
                    ['name' => 'Hades', 'role' => 'Antagonista Principal', 'description' => 'Dios del Inframundo y padre de Zagreo. Un burócrata estricto y un guerrero temible que hará todo para evitar que su hijo escape.', 'image_url' => 'https://tu-dominio.com/img/hades-char.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Blobfish', 'country' => 'Francia', 'website' => 'blobfish.dev'],
                'engine' => 'Godot',
                'game' => [
                    'title' => 'Brotato',
                    'description' => 'Un roguelite shooter de vista superior donde juegas como una patata armada con hasta 6 armas a la vez para luchar contra hordas de alienígenas.',
                    'release_date' => '2023-06-23',
                    'cover_image' => 'https://tu-dominio.com/img/brotato.jpg',
                ],
                'genres' => ['Roguelite', 'Acción', 'Supervivencia'],
                'platforms' => ['PC (Windows)', 'Nintendo Switch', 'PlayStation 4', 'PlayStation 5', 'Xbox One', 'Xbox Series X/S', 'Android', 'iOS'],
                'characters' => [
                    ['name' => 'Brotato', 'role' => 'Protagonista', 'description' => 'Una patata guerrera superviviente capaz de empuñar 6 armas simultáneamente tras estrellarse en un planeta hostil.', 'image_url' => 'https://tu-dominio.com/img/brotato-char.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'ConcernedApe', 'country' => 'Estados Unidos', 'website' => 'stardewvalley.net'],
                'engine' => 'XNA / Monogame',
                'game' => [
                    'title' => 'Stardew Valley',
                    'description' => 'Heredaste la vieja parcela agrícola de tu abuelo. Armado con herramientas de segunda mano y algunas monedas, te dispones a comenzar tu nueva vida.',
                    'release_date' => '2016-02-26',
                    'cover_image' => 'https://tu-dominio.com/img/stardew.jpg',
                ],
                'genres' => ['Simulador de Vida', 'RPG', 'Gestión'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'Xbox One', 'iOS', 'Android'],
                'characters' => [
                    ['name' => 'El Granjero', 'role' => 'Protagonista', 'description' => 'Un ex-empleado corporativo que abandona la ciudad para revivir la granja de su abuelo en Pueblo Pelícano.', 'image_url' => 'https://tu-dominio.com/img/farmer.jpg'],
                    ['name' => 'Abigail', 'role' => 'NPC / Romanceable', 'description' => 'Una joven rebelde del pueblo interesada en el ocultismo, las espadas y explorar las minas.', 'image_url' => 'https://tu-dominio.com/img/abigail.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Toby Fox', 'country' => 'Estados Unidos', 'website' => 'undertale.com'],
                'engine' => 'GameMaker',
                'game' => [
                    'title' => 'Undertale',
                    'description' => 'Un juego de rol en el que no tienes que destruir a nadie. Sobrevive esquivando ataques en un sistema de combate único y negocia para salir del peligro.',
                    'release_date' => '2015-09-15',
                    'cover_image' => 'https://tu-dominio.com/img/undertale.jpg',
                ],
                'genres' => ['RPG', 'Bullet Hell', 'Comedia'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'Xbox One'],
                'characters' => [
                    ['name' => 'Frisk', 'role' => 'Protagonista', 'description' => 'Un niño humano que cae al Subsuelo, un reino aislado lleno de monstruos. Su determinación es su mayor arma.', 'image_url' => 'https://tu-dominio.com/img/frisk.jpg'],
                    ['name' => 'Sans', 'role' => 'NPC / Jefe Secreto', 'description' => 'Un esqueleto bajo, perezoso y amante de los chistes malos, que resulta ser uno de los seres más poderosos del juego.', 'image_url' => 'https://tu-dominio.com/img/sans.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Studio MDHR', 'country' => 'Canadá', 'website' => 'cupheadgame.com'],
                'engine' => 'Unity',
                'game' => [
                    'title' => 'Cuphead',
                    'description' => 'Un juego de acción clásico tipo "run and gun" fuertemente enfocado en batallas contra jefes, inspirado en las caricaturas de los años 30.',
                    'release_date' => '2017-09-29',
                    'cover_image' => 'https://tu-dominio.com/img/cuphead.jpg',
                ],
                'genres' => ['Run and Gun', 'Acción', 'Plataformas'],
                'platforms' => ['PC (Windows)', 'macOS', 'Nintendo Switch', 'PlayStation 4', 'Xbox One'],
                'characters' => [
                    ['name' => 'Cuphead', 'role' => 'Protagonista', 'description' => 'Un joven con cabeza de taza, impulsivo y buscador de problemas, que pierde una apuesta con el Diablo.', 'image_url' => 'https://tu-dominio.com/img/cuphead-char.jpg'],
                    ['name' => 'The Devil', 'role' => 'Antagonista Principal', 'description' => 'El regente del Casino Inkwell que obliga a los hermanos a recolectar contratos de almas.', 'image_url' => 'https://tu-dominio.com/img/devil.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Motion Twin', 'country' => 'Francia', 'website' => 'deadcells.com'],
                'engine' => 'Heaps (Haxe)',
                'game' => [
                    'title' => 'Dead Cells',
                    'description' => 'Un roguelite estilo metroidvania inspirado en Castlevania. Explora un castillo en constante cambio mientras mueres, aprendes y repites.',
                    'release_date' => '2018-08-07',
                    'cover_image' => 'https://tu-dominio.com/img/deadcells.jpg',
                ],
                'genres' => ['Roguelite', 'Metroidvania', 'Acción'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'PlayStation 5', 'Xbox One', 'iOS', 'Android'],
                'characters' => [
                    ['name' => 'El Decapitado', 'role' => 'Protagonista', 'description' => 'Un cúmulo inmortal de células que toma posesión de cadáveres decapitados para luchar.', 'image_url' => 'https://tu-dominio.com/img/beheaded.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Re-Logic', 'country' => 'Estados Unidos', 'website' => 'terraria.org'],
                'engine' => 'XNA / Monogame',
                'game' => [
                    'title' => 'Terraria',
                    'description' => 'Cava, lucha, explora, construye. Nada es imposible en este juego de aventuras lleno de acción.',
                    'release_date' => '2011-05-16',
                    'cover_image' => 'https://tu-dominio.com/img/terraria.jpg',
                ],
                'genres' => ['Sandbox', 'Supervivencia', 'Aventura'],
                'platforms' => ['PC (Windows)', 'macOS', 'Linux', 'Nintendo Switch', 'PlayStation 4', 'PlayStation 5', 'Xbox One', 'Xbox Series X/S', 'iOS', 'Android'],
                'characters' => [
                    ['name' => 'El Guía', 'role' => 'NPC', 'description' => 'El primer NPC con el que el jugador interactúa. Ofrece consejos útiles y recetas de crafteo.', 'image_url' => 'https://tu-dominio.com/img/guide.jpg'],
                ]
            ],
            [
                'developer' => ['name' => 'Askiisoft', 'country' => 'Estados Unidos', 'website' => 'katanazero.com'],
                'engine' => 'GameMaker',
                'game' => [
                    'title' => 'Katana ZERO',
                    'description' => 'Un trepidante plataformas de acción neo-noir centrado en combates acrobáticos y la manipulación del tiempo.',
                    'release_date' => '2019-04-18',
                    'cover_image' => 'https://tu-dominio.com/img/katana-zero.jpg',
                ],
                'genres' => ['Acción', 'Plataformas', 'Neo-noir'],
                'platforms' => ['PC (Windows)', 'macOS', 'Nintendo Switch', 'Xbox One'],
                'characters' => [
                    ['name' => 'Subject Zero', 'role' => 'Protagonista', 'description' => 'Un asesino amnésico dependiente de la droga Chronos que le otorga precognición.', 'image_url' => 'https://tu-dominio.com/img/zero.jpg'],
                    ['name' => 'El Psiquiatra', 'role' => 'NPC / Jefe', 'description' => 'El frío supervisor de Zero que le asigna sus contratos de asesinato.', 'image_url' => 'https://tu-dominio.com/img/psychiatrist.jpg'],
                ]
            ]
        ];

        // 3. Inserción Inteligente Relacional
        foreach ($gamesData as $data) {
            // A. Desarrollador
            $developer = Developer::firstOrCreate(
                ['name' => $data['developer']['name']],
                [
                    'country' => $data['developer']['country'],
                    'website' => $data['developer']['website']
                ]
            );

            // B. Motor Gráfico (Foreign Key)
            $engine = Engine::firstOrCreate(['name' => $data['engine']]);

            // C. Juego
            $game = Game::create(array_merge($data['game'], [
                'developer_id' => $developer->id,
                'engine_id' => $engine->id,
            ]));

            // D. Géneros (Tabla Pivote `game_genre`)
            $genreIds = [];
            foreach ($data['genres'] as $genreName) {
                $genre = Genre::firstOrCreate(['name' => $genreName]);
                $genreIds[] = $genre->id;
            }
            $game->genres()->sync($genreIds);

            // E. Plataformas (Tabla Pivote `game_platform`)
            $platformIds = [];
            foreach ($data['platforms'] as $platformName) {
                $platform = Platform::firstOrCreate(['name' => $platformName]);
                $platformIds[] = $platform->id;
            }
            $game->platforms()->sync($platformIds);

            // F. Personajes (Tabla Pivote `character_game` con campo `role`)
            foreach ($data['characters'] as $charData) {
                $character = Character::firstOrCreate(
                    ['name' => $charData['name']],
                    [
                        'description' => $charData['description'],
                        'image_url' => $charData['image_url']
                    ]
                );

                // Relación N:M guardando el rol
                $game->characters()->attach($character->id, [
                    'role' => $charData['role']
                ]);
            }
        }
    }
}

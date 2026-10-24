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
                'developer' => [
                    'name' => 'Team Cherry',
                    'country' => 'Australia',
                    'website' => 'teamcherry.com.au'
                ],
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
                    // Protagonista
                    [
                        'name' => 'El Caballero (The Knight)',
                        'category' => 'Protagonista',
                        'role' => 'Héroe jugable',
                        'description' => 'Un vasallo silencioso nacido del Vacío que porta un aguijón gastado, destinado a adentrarse en las profundidades de Hallownest.',
                        'image_url' => 'https://tu-dominio.com/img/knight.jpg'
                    ],

                    // Comerciantes y Servicios
                    [
                        'name' => 'Sly',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Tendero principal / Gran Maestro de aguijones',
                        'description' => 'Rescatado en Cruces Olvidados, vende herramientas, amuletos y fragmentos esenciales en Bocasucia.',
                        'image_url' => 'https://tu-dominio.com/img/sly.jpg'
                    ],
                    [
                        'name' => 'Iselda',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Cartógrafa y Comerciante',
                        'description' => 'Esposa de Cornifer. Vende mapas, marcadores y herramientas de cartografía en Bocasucia.',
                        'image_url' => 'https://tu-dominio.com/img/iselda.jpg'
                    ],
                    [
                        'name' => 'Salubra',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Vendedora de amuletos',
                        'description' => 'Una alegre babosa que habita en los Cruces Olvidados y vende amuletos y muescas adicionales.',
                        'image_url' => 'https://tu-dominio.com/img/salubra.jpg'
                    ],
                    [
                        'name' => 'Comepiernas',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Comerciante',
                        'description' => 'Un voraz insecto ciego ubicado en Páramos Fúngicos que vende y repara amuletos frágiles.',
                        'image_url' => 'https://tu-dominio.com/img/comepiernas.jpg'
                    ],
                    [
                        'name' => 'Forjaguijones',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Herrero',
                        'description' => 'Un hábil artesano ubicado en la Ciudad de Lágrimas dedicado a mejorar la fuerza del aguijón a cambio de Mineral Pálido.',
                        'image_url' => 'https://tu-dominio.com/img/forjaguijones.jpg'
                    ],
                    [
                        'name' => 'Lemm el Buscador de Reliquias',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Historiador y Comerciante',
                        'description' => 'Un arqueólogo cascarrabias en la Ciudad de Lágrimas que compra reliquias antiguas a cambio de ros. Geo.',
                        'image_url' => 'https://tu-dominio.com/img/lemm.jpg'
                    ],
                    [
                        'me' => 'Confesor Jiji',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Sacerdote / Servicio de recuperación',
                        'description' => 'Permite recuperar la Sombra perdida a cambio de Huevos Podridos.',
                        'image_url' => 'https://tu-dominio.com/img/confesor-jiji.jpg'
                    ],
                    [
                        'name' => 'Millibelle la Banquera',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Banquera',
                        'description' => 'Ofrece resguardar el Geo del jugador, aunque esconde intenciones dudosas.',
                        'image_url' => 'https://tu-dominio.com/img/millibelle.jpg'
                    ],
                    [
                        'name' => 'El Último Ciervo',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Transportista',
                        'description' => 'Anciano leal que transporta al Caballero a través de las estaciones de ciervos de Hallownest.',
                        'image_url' => 'https://tu-dominio.com/img/ultimo-ciervo.jpg'
                    ],
                    [
                        'name' => 'Tuk',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Recolectora',
                        'description' => 'Un insecto obsesionado con los Huevos Podridos ubicado en los Canales Reales.',
                        'image_url' => 'https://tu-dominio.com/img/tuk.jpg'
                    ],
                    [
                        'name' => 'Alma de Acero Jinn',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Comerciante (Exclusiva de Alma de Acero)',
                        'description' => 'Reemplaza a Confesor Jiji en el modo Alma de Acero y compra Huevos Podridos por Geo.',
                        'image_url' => 'https://tu-dominio.com/img/jinn.jpg'
                    ],
                    [
                        'name' => 'Pequeño Insensato',
                        'category' => 'Comerciantes y Servicios',
                        'role' => 'Organizador del Coliseo',
                        'description' => 'Un curioso personaje colgado en el Coliseo de los Insensatos que cobra inscripción para los juicios.',
                        'image_url' => 'https://tu-dominio.com/img/pequeno-insensato.jpg'
                    ],

                    // Maestros de Aguijones
                    [
                        'name' => 'Maestro de Aguijones Mato',
                        'category' => 'Maestros de Aguijones',
                        'role' => 'Instructor de combate',
                        'description' => 'Mente solitaria residente en Acantilados Aulladores; enseña la técnica "Corte Ciclón".',
                        'image_url' => 'https://tu-dominio.com/img/mato.jpg'
                    ],
                    [
                        'name' => 'Maestro de Aguijones Oro',
                        'category' => 'Maestros de Aguijones',
                        'role' => 'Instructor de combate',
                        'description' => 'Un ermitaño mercenario que habita en Límite del Reino y enseña "Corte Veloz".',
                        'image_url' => 'https://tu-dominio.com/img/oro.jpg'
                    ],
                    [
                        'name' => 'Maestro de Aguijones Sheo',
                        'category' => 'Maestros de Aguijones',
                        'role' => 'Instructor de combate y Artista',
                        'description' => 'Maestro retirado en Senderos Verdes dedicado al arte; enseña la técnica "Corte Impulso".',
                        'image_url' => 'https://tu-dominio.com/img/sheo.jpg'
                    ],

                    // Errantes y Viajeros
                    [
                        'name' => 'Hornet',
                        'category' => 'Errantes',
                        'role' => 'Protectora de Hallownest / Rival',
                        'description' => 'Guardiana de las ruinas que utiliza una aguja e hilo con mortal precisión. Pone a prueba la valía del Caballero.',
                        'image_url' => 'https://tu-dominio.com/img/hornet.jpg'
                    ],
                    [
                        'name' => 'Quirrel',
                        'category' => 'Errantes',
                        'role' => 'Explorador y Aliado',
                        'description' => 'Un curioso sabio amnésico fascinado por los secretos de Hallownest que asiste al Caballero en momentos clave.',
                        'image_url' => 'https://tu-dominio.com/img/quirrel.jpg'
                    ],
                    [
                        'name' => 'Cornifer',
                        'category' => 'Errantes',
                        'role' => 'Cartógrafo',
                        'description' => 'Un simpático cartógrafo que viaja trazando mapas de las zonas de Hallownest.',
                        'image_url' => 'https://tu-dominio.com/img/cornifer.jpg'
                    ],
                    [
                        'name' => 'Cloth',
                        'category' => 'Errantes',
                        'role' => 'Guerrera',
                        'description' => 'Una aventurera novata que busca valor enfrentándose a poderosos enemigos.',
                        'image_url' => 'https://tu-dominio.com/img/cloth.jpg'
                    ],
                    [
                        'name' => 'Tiso',
                        'category' => 'Errantes',
                        'role' => 'Gladiador arrogante',
                        'description' => 'Un guerrero confiado que busca combatir en el Coliseo de los Insensatos.',
                        'image_url' => 'https://tu-dominio.com/img/tiso.jpg'
                    ],
                    [
                        'name' => 'Zote el Todopoderoso',
                        'category' => 'Errantes',
                        'role' => 'Viajero arrogante / Jefe cómico',
                        'description' => 'Un pretencioso guerrero que presume constantes hazañas falsas y que necesita ser rescatado repetidamente.',
                        'image_url' => 'https://tu-dominio.com/img/zote.jpg'
                    ],
                    [
                        'name' => 'Señor Seta',
                        'category' => 'Errantes',
                        'role' => 'Personaje misterioso',
                        'description' => 'Un hongo parlante místico que aparece en distintos puntos y desbloquea una escena secreta tras completar su diálogo.',
                        'image_url' => 'https://tu-dominio.com/img/senor-seta.jpg'
                    ],

                    // NPCs de Misiones
                    [
                        'name' => 'Bretta',
                        'category' => 'Misiones',
                        'role' => 'Habitante rescatable',
                        'description' => 'Un insecto tímido rescatado en Páramos Fúngicos que se obsesiona románticamente con sus héroes.',
                        'image_url' => 'https://tu-dominio.com/img/bretta.jpg'
                    ],
                    [
                        'name' => 'Doliente Gris',
                        'category' => 'Misiones',
                        'role' => 'Otorgadora de misión',
                        'description' => 'Una antigua guerrera que encarga entregar una Flor Delicada al altar de su amada en Tierras de Reposo.',
                        'image_url' => 'https://tu-dominio.com/img/doliente-gris.jpg'
                    ],
                    [
                        'name' => 'La Vidente',
                        'category' => 'Misiones',
                        'role' => 'Guía mística',
                        'description' => 'Última de la tribu de las polillas; guía al Caballero en el uso del Aguijón del Sueño y recompensas por Esencia.',
                        'image_url' => 'https://tu-dominio.com/img/vidente.jpg'
                    ],
                    [
                        'name' => 'Padre Larva',
                        'category' => 'Misiones',
                        'role' => 'Recolector',
                        'description' => 'Recompensa al Caballero con Geo y objetos valiosos por cada una de sus larvas rescatadas.',
                        'image_url' => 'https://tu-dominio.com/img/padre-larva.jpg'
                    ],

                    // Lore y Lore de Hallownest
                    [
                        'name' => 'El Cazador',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Otorgador del Diario del Cazador',
                        'me description' => 'Una criatura oculta en Senderos Verdes que entrega su diario para registrar a los enemigos de Hallownest.',
                        'image_url' => 'https://tu-dominio.com/img/el-cazador.jpg'
                    ],
                    [
                        'name' => 'Rey Pálido',
                        'category' => 'Lore y Apoyo',
                        'role me' => 'Gobernante supremo de Hallownest',
                        'description' => 'Ser divino que otorgó mente a los insectos de Hallownest y creó a los vasallos para contener la Infección.',
                        'image_url' => 'https://tu-dominio.com/img/rey-palido.jpg'
                    ],
                    [
                        'name' => 'Dama Blanca',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Reina de Hallownest',
                        'description' => 'Ser divino oculto en los Jardines de la Reina que entrega parte del amuleto Alma del Monarca.',
                        'image_url' => 'https://tu-dominio.com/img/dama-blanca.jpg'
                    ],
                    [
                        'name' => 'Viejo Insecto',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Guía inicial',
                        'description' => 'Anciano amable que recibe a los viajeros en Bocasucia y ofrece consejos reflexivos.',
                        'image_url' => 'https://tu-dominio.com/img/viejo-insecto.jpg'
                    ],
                    [
                        'name' => 'Myla',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Minera amigable',
                        'description' => 'Una minera alegre en Cruces Olvidados cuya trágica historia refleja el avance de la Infección.',
                        'image_url' => 'https://tu-dominio.com/img/myla.jpg'
                    ],
                    [
                        'name' => 'Defensor del Estiércol (Ogrim)',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Jefe / Caballero Leal',
                        'description' => 'Uno de los Cinco Grandes Caballeros de Hallownest que protege con fervor los Canales Reales.',
                        'image_url' => 'https://tu-dominio.com/img/defensor-estiercol.jpg'
                    ],
                    [
                        'name' => 'Chamán Caracol',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Proveedor de hechizos',
                        'description' => 'Ser místico ubicado en los Cruces Olvidados que otorga hechizos de Alma al Caballero.',
                        'image_url' => 'https://tu-dominio.com/img/chaman-caracol.jpg'
                    ],
                    [
                        'name' => 'Fabricante de Máscaras',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Artesano del Lore',
                        'description' => 'Entidad en los Nidos Profundos que talla las caras y máscaras que otorgan identidad a las criaturas.',
                        'image_url' => 'https://tu-dominio.com/img/fabricante-mascaras.jpg'
                    ],
                    [
                        'name' => 'Bardoon',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Mística oruga gigante',
                        'description' => 'Criatura anciana ubicada en Límite del Reino que revela detalles profundos del origen del mundo.',
                        'image_url' => 'https://tu-dominio.com/img/bardoon.jpg'
                    ],
                    [
                        'name' => 'Unn',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Diosa de la naturaleza',
                        'description' => 'Ser ancestral durmiente que creó la vegetación de Senderos Verdes.',
                        'image_url' => 'https://tu-dominio.com/img/unn.jpg'
                    ],
                    [
                        'name' => 'Emilitia',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Aristócrata sobreviviente',
                        'description' => 'Una noble repudiada que sobrevivió a la plaga aislada en la Ciudad de Lágrimas.',
                        'image_url' => 'https://tu-dominio.com/img/emilitia.jpg'
                    ],
                    [
                        'name' => 'Matrona',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Habitante anciana',
                        'description' => 'Un ser colosal dentro de Nidos Profundos que protege a los suyos en las sombras.',
                        'image_url' => 'https://tu-dominio.com/img/matrona.jpg'
                    ],
                    [
                        'name' => 'Profeta del Musgo',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Predicador',
                        'description' => 'Un fanático del musgo que predica sobre la luz de la Infección en los Páramos Fúngicos.',
                        'image_url' => 'https://tu-dominio.com/img/profeta-musgo.jpg'
                    ],
                    [
                        'name' => 'Willoh',
                        'category' => 'Lore y Apoyo',
                        'role' => 'Viajera voraz',
                        'description' => 'Una jirafa-carcoma encontrada comiendo en Estación de la Reina.',
                        'image_url' => 'https://tu-dominio.com/img/willoh.jpg'
                    ],

                    // DLC: La Compañía de Grimm
                    [
                        'name' => 'Líder de la Troupe Grimm',
                        'category' => 'La Compañía de Grimm',
                        'role' => 'Jefe principal del DLC',
                        'description' => 'El misterioso maestro de ceremonias del circo de las pesadillas que llega a Bocasucia.',
                        'image_url' => 'https://tu-dominio.com/img/grimm.jpg'
                    ],
                    [
                        'name' => 'Brumm',
                        'category' => 'La Compañía de Grimm',
                        'role' => 'Músico de la Troupe',
                        'description' => 'Acordeonista de la tropa que busca romper el ciclo interminable del ritual.',
                        'image_url' => 'https://tu-dominio.com/img/brumm.jpg'
                    ],
                    [
                        'name' => 'Divine',
                        'category' => 'La Compañía de Grimm',
                        'role' => 'Mejoradora de amuletos',
                        'description' => 'Miembro de la Troupe que convierte los amuletos frágiles en sus versiones irrompibles por Geo.',
                        'image_url' => 'https://tu-dominio.com/img/divine.jpg'
                    ],
                    [
                        'name' => 'Grimmsteed',
                        'category' => 'La Compañía de Grimm',
                        'role' => 'Bestia del circo',
                        'description' => 'Criatura de pesadilla que sirve de transporte para la Compañía de Grimm.',
                        'image_url' => 'https://tu-dominio.com/img/grimmsteed.jpg'
                    ],
                    [
                        'name' => 'Nymm',
                        'category' => 'La Compañía de Grimm',
                        'role' => 'Músico sustituto',
                        'description' => 'Músico alegre que aparece en Bocasucia tras desterrar a la Compañía de Grimm.',
                        'image_url' => 'https://tu-dominio.com/img/nymm.jpg'
                    ],
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
                    ['name' => 'Badeline', 'role' => 'Antagonista / Reflexión', 'description' => 'La manifestación física de la ansiedad, el pragmatismo y los miedos de Madeline, nacida del poder místico de la montaña.', 'image_url' => 'https://tu-dominio.com/img/badeline.jpg'],
                    ['name' => 'Theo', 'role' => 'Aliado / NPC', 'description' => 'Un aventurero relajado de Seattle que visita la montaña para tomar fotos. Se convierte en un gran amigo y ancla emocional para Madeline.', 'image_url' => 'https://tu-dominio.com/img/theo.jpg'],
                    ['name' => 'Granny (La Abuela)', 'role' => 'NPC / Mentora', 'description' => 'Una anciana misteriosa y sarcástica que vive en la montaña. Ofrece consejos crípticos pero útiles a Madeline.', 'image_url' => 'https://tu-dominio.com/img/granny.jpg'],
                    ['name' => 'Mr. Oshiro', 'role' => 'NPC / Jefe', 'description' => 'El fantasma ansioso e inestable del antiguo dueño de un hotel abandonado en la ladera de la montaña Celeste.', 'image_url' => 'https://tu-dominio.com/img/oshiro.jpg'],
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
                    ['name' => 'Nyx', 'role' => 'NPC / Madre Adoptiva', 'description' => 'La personificación de la Noche. Una figura materna para Zagreo que lo ayuda en secreto contactando al Olimpo.', 'image_url' => 'https://tu-dominio.com/img/nyx.jpg'],
                    ['name' => 'Cerbero', 'role' => 'Mascota / NPC', 'description' => 'El temible perro de tres cabezas que guarda el Inframundo. Secretamente es un buen chico al que le encantan las caricias.', 'image_url' => 'https://tu-dominio.com/img/cerberus.jpg'],
                    ['name' => 'Aquiles', 'role' => 'Mentor / NPC', 'description' => 'El legendario héroe de la guerra de Troya, atado al Inframundo mediante un pacto. Es el instructor de combate de Zagreo.', 'image_url' => 'https://tu-dominio.com/img/achilles.jpg'],
                    ['name' => 'Megara', 'role' => 'Jefe / Romanceable', 'description' => 'La primera de las Furias, enviada por Hades para detener a Zagreo en el Tártaro.', 'image_url' => 'https://tu-dominio.com/img/megaera.jpg'],
                    ['name' => 'Tánatos', 'role' => 'Aliado / Romanceable', 'description' => 'La personificación de la Muerte. Amigo de la infancia de Zagreo con una actitud fría pero protectora.', 'image_url' => 'https://tu-dominio.com/img/thanatos.jpg'],
                    ['name' => 'Caronte', 'role' => 'Comerciante', 'description' => 'El silencioso barquero de los muertos que vende artefactos a Zagreo a cambio de Óbolos de oro.', 'image_url' => 'https://tu-dominio.com/img/charon.jpg'],
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
                    ['name' => 'El Mercader', 'role' => 'NPC', 'description' => 'El misterioso proveedor entre oleadas que ofrece armas y objetos a cambio de los materiales recolectados.', 'image_url' => 'https://tu-dominio.com/img/brotato-merchant.jpg'],
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
                    ['name' => 'Alcalde Lewis', 'role' => 'NPC Principal', 'description' => 'El alcalde de Pueblo Pelícano durante más de 20 años. Da la bienvenida al jugador y organiza los festivales del pueblo.', 'image_url' => 'https://tu-dominio.com/img/lewis.jpg'],
                    ['name' => 'Robin', 'role' => 'NPC / Carpintera', 'description' => 'La carpintera local que construye y mejora los edificios en la granja del jugador.', 'image_url' => 'https://tu-dominio.com/img/robin.jpg'],
                    ['name' => 'Marnie', 'role' => 'NPC / Comerciante', 'description' => 'Dueña del rancho al sur de la granja. Vende animales, heno y suministros ganaderos.', 'image_url' => 'https://tu-dominio.com/img/marnie.jpg'],
                    ['name' => 'Abigail', 'role' => 'NPC / Romanceable', 'description' => 'Una joven rebelde del pueblo interesada en el ocultismo, los videojuegos y explorar las minas.', 'image_url' => 'https://tu-dominio.com/img/abigail.jpg'],
                    ['name' => 'Linus', 'role' => 'NPC', 'description' => 'Un hombre incomprendido que ha elegido vivir en armonía con la naturaleza en su tienda de campaña en la montaña.', 'image_url' => 'https://tu-dominio.com/img/linus.jpg'],
                    ['name' => 'Mago Rasmodius', 'role' => 'NPC Mágico', 'description' => 'Un mago ermitaño que estudia los fenómenos arcanos del valle y ayuda al jugador a comunicarse con los Junimos.', 'image_url' => 'https://tu-dominio.com/img/wizard.jpg'],
                    ['name' => 'Krobus', 'role' => 'NPC / Compañero de cuarto', 'description' => 'Un amistoso monstruo de las sombras que vive en las alcantarillas y vende objetos raros.', 'image_url' => 'https://tu-dominio.com/img/krobus.jpg'],
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
                    ['name' => 'Frisk', 'role' => 'Protagonista', 'description' => 'Un infante humano que cae al Subsuelo, un reino aislado lleno de monstruos. Su determinación es su mayor arma.', 'image_url' => 'https://tu-dominio.com/img/frisk.jpg'],
                    ['name' => 'Flowey', 'role' => 'Antagonista', 'description' => 'Una flor parlante sin alma que sigue la brutal filosofía de "matar o morir" en el Subsuelo.', 'image_url' => 'https://tu-dominio.com/img/flowey.jpg'],
                    ['name' => 'Toriel', 'role' => 'Guía / NPC / Jefe', 'description' => 'Una monstruo maternal con apariencia de cabra que protege a Frisk en las Ruinas e intenta evitar que avance al peligro.', 'image_url' => 'https://tu-dominio.com/img/toriel.jpg'],
                    ['name' => 'Sans', 'role' => 'NPC / Jefe Secreto', 'description' => 'Un esqueleto bajo, perezoso y amante de los chistes malos. Posee un inmenso poder oculto.', 'image_url' => 'https://tu-dominio.com/img/sans.jpg'],
                    ['name' => 'Papyrus', 'role' => 'NPC / Jefe', 'description' => 'El hermano menor de Sans. Un esqueleto entusiasta e inocente que sueña con capturar un humano para unirse a la Guardia Real.', 'image_url' => 'https://tu-dominio.com/img/papyrus.jpg'],
                    ['name' => 'Undyne', 'role' => 'Jefe / Aliada', 'description' => 'La fiera capitana de la Guardia Real. Una guerrera pez decidida a cazar a Frisk por el bien de los monstruos.', 'image_url' => 'https://tu-dominio.com/img/undyne.jpg'],
                    ['name' => 'Alphys', 'role' => 'NPC / Científica', 'description' => 'La Científica Real. Una monstruo reptil tímida, brillante y otaku que asiste a Frisk desde Hotland.', 'image_url' => 'https://tu-dominio.com/img/alphys.jpg'],
                    ['name' => 'Mettaton', 'role' => 'Jefe / Celebridad', 'description' => 'Un robot de entretenimiento diseñado por Alphys, obsesionado con el drama, el rating y convertirse en una estrella.', 'image_url' => 'https://tu-dominio.com/img/mettaton.jpg'],
                    ['name' => 'Asgore Dreemurr', 'role' => 'Jefe / Rey', 'description' => 'El trágico rey de los monstruos. Recolecta almas humanas con gran pesar para romper la barrera que los aprisiona.', 'image_url' => 'https://tu-dominio.com/img/asgore.jpg'],
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
                    ['name' => 'Cuphead', 'role' => 'Protagonista', 'description' => 'Un joven con cabeza de taza, impulsivo y buscador de problemas, que pierde su alma en una apuesta con el Diablo.', 'image_url' => 'https://tu-dominio.com/img/cuphead-char.jpg'],
                    ['name' => 'Mugman', 'role' => 'Co-Protagonista', 'description' => 'El hermano prudente de Cuphead. Se ve arrastrado a la peligrosa tarea de recolectar contratos de almas.', 'image_url' => 'https://tu-dominio.com/img/mugman.jpg'],
                    ['name' => 'Señorita Cáliz (Ms. Chalice)', 'role' => 'NPC / Protagonista DLC', 'description' => 'Un fantasma atrapado en urnas mágicas que luego adquiere forma física para ayudar a los hermanos.', 'image_url' => 'https://tu-dominio.com/img/chalice.jpg'],
                    ['name' => 'El Anciano Tetera (Elder Kettle)', 'role' => 'Mentor', 'description' => 'El sabio cuidador de Cuphead y Mugman. Les entrega las pociones mágicas que les otorgan la habilidad de disparar.', 'image_url' => 'https://tu-dominio.com/img/elder-kettle.jpg'],
                    ['name' => 'Corteza de Cerdo (Porkrind)', 'role' => 'Comerciante', 'description' => 'El dueño del emporio local que vende a los hermanos nuevas armas y mejoras a cambio de monedas.', 'image_url' => 'https://tu-dominio.com/img/porkrind.jpg'],
                    ['name' => 'Rey Dado (King Dice)', 'role' => 'Antagonista Secundario', 'description' => 'El carismático gerente del casino y la mano derecha del Diablo. Se asegura de que los hermanos cumplan el trato.', 'image_url' => 'https://tu-dominio.com/img/king-dice.jpg'],
                    ['name' => 'El Diablo (The Devil)', 'role' => 'Antagonista Principal', 'description' => 'El regente del Casino Inkwell. Dueño de las almas de los hermanos y el jefe final del juego base.', 'image_url' => 'https://tu-dominio.com/img/devil.jpg'],
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
                    ['name' => 'El Decapitado (The Beheaded)', 'role' => 'Protagonista', 'description' => 'Un homúnculo inmortal hecho de células vivas que toma posesión de cadáveres decapitados para intentar escapar de la isla.', 'image_url' => 'https://tu-dominio.com/img/beheaded.jpg'],
                    ['name' => 'El Coleccionista', 'role' => 'Comerciante / NPC', 'description' => 'Un misterioso alquimista ubicado en las transiciones de nivel que desbloquea nuevas armas y planos a cambio de células.', 'image_url' => 'https://tu-dominio.com/img/collector.jpg'],
                    ['name' => 'Guillain (El Mutante)', 'role' => 'Comerciante', 'description' => 'Una pequeña y extraña criatura que ofrece al jugador las mutaciones (ventajas pasivas) antes de entrar al siguiente nivel.', 'image_url' => 'https://tu-dominio.com/img/guillain.jpg'],
                    ['name' => 'El Herrero', 'role' => 'NPC de Mejoras', 'description' => 'Personaje que permite invertir células a largo plazo para mejorar la calidad base (probabilidad de +, ++, S) de las armas encontradas.', 'image_url' => 'https://tu-dominio.com/img/blacksmith.jpg'],
                    ['name' => 'El Sastre', 'role' => 'NPC Cosmético', 'description' => 'Un habitante de la prisión encargado de cambiar los trajes y atuendos del Decapitado.', 'image_url' => 'https://tu-dominio.com/img/tailor.jpg'],
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
                    ['name' => 'El Guía', 'role' => 'NPC', 'description' => 'El primer NPC con el que el jugador interactúa. Ofrece consejos útiles, recetas de crafteo y su sacrificio invoca al Muro de Carne.', 'image_url' => 'https://tu-dominio.com/img/guide.jpg'],
                    ['name' => 'El Mercader', 'role' => 'NPC / Comerciante', 'description' => 'Llega cuando el jugador recolecta suficientes monedas. Vende herramientas, pociones y suministros básicos.', 'image_url' => 'https://tu-dominio.com/img/merchant.jpg'],
                    ['name' => 'La Enfermera', 'role' => 'NPC / Curandera', 'description' => 'Se muda cuando el jugador aumenta su salud máxima. Cura la vida y elimina debuffs al instante a cambio de monedas.', 'image_url' => 'https://tu-dominio.com/img/nurse.jpg'],
                    ['name' => 'La Dríada', 'role' => 'NPC', 'description' => 'Aparece tras derrotar a un jefe. Vende polvo purificador y semillas, e informa del estado de corrupción del mundo.', 'image_url' => 'https://tu-dominio.com/img/dryad.jpg'],
                    ['name' => 'Traficante de Armas', 'role' => 'NPC / Comerciante', 'description' => 'Llega cuando el jugador obtiene su primera arma de fuego. Vende armas, munición y piezas ilegales.', 'image_url' => 'https://tu-dominio.com/img/arms-dealer.jpg'],
                    ['name' => 'Duende Manitas', 'role' => 'NPC', 'description' => 'Se rescata tras repeler una Invasión Duende. Vende las Botas Cohete y permite reforjar armas y accesorios.', 'image_url' => 'https://tu-dominio.com/img/goblin.jpg'],
                    ['name' => 'El Anciano', 'role' => 'NPC / Invocador', 'description' => 'Vigila la entrada de la Mazmorra de noche y de día. Al hablar con él de noche, invoca al jefe Esqueletrón.', 'image_url' => 'https://tu-dominio.com/img/old-man.jpg'],
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
                    ['name' => 'Sujeto Cero (Zero)', 'role' => 'Protagonista', 'description' => 'Un samurái amnésico y veterano de guerra que depende de la droga Chronos, la cual le otorga precognición y reflejos sobrehumanos.', 'image_url' => 'https://tu-dominio.com/img/zero.jpg'],
                    ['name' => 'El Psiquiatra', 'role' => 'NPC / Empleador', 'description' => 'El frío supervisor de Zero. Le inyecta Chronos diariamente y le asigna sus contratos de asesinato bajo la fachada de sesiones de terapia.', 'image_url' => 'https://tu-dominio.com/img/psychiatrist.jpg'],
                    ['name' => 'La Niña', 'role' => 'NPC', 'description' => 'Una niña amable e imaginativa que vive junto al apartamento de Zero y se convierte en su conexión con la humanidad.', 'image_url' => 'https://tu-dominio.com/img/little-girl.jpg'],
                    ['name' => 'V', 'role' => 'Antagonista', 'description' => 'Un asesino de la mafia rusa. Es psicópata, narcisista y tiene una obsesión morbosa con las habilidades letales de Zero.', 'image_url' => 'https://tu-dominio.com/img/v.jpg'],
                    ['name' => 'Snow', 'role' => 'Antagonista', 'description' => 'Una letal y disciplinada espadachina que colabora con V y protege las operaciones de sus empleadores en las sombras.', 'image_url' => 'https://tu-dominio.com/img/snow.jpg'],
                    ['name' => 'Comedia y Tragedia', 'role' => 'NPCs Misteriosos', 'description' => 'Dos individuos enigmáticos que visten batas y máscaras teatrales. Aparecen en las visiones de Zero para burlarse y juzgar sus acciones.', 'image_url' => 'https://tu-dominio.com/img/comedy-tragedy.jpg'],
                    ['name' => 'Quince (El Dragón)', 'role' => 'Aliado / Asesino', 'description' => 'Otro soldado del programa NULL con un nivel de combate letal. Posee un fuerte vínculo con el pasado fragmentado de Zero.', 'image_url' => 'https://tu-dominio.com/img/fifteen.jpg'],
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

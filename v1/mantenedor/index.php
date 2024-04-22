<?php
include_once '../version1.php';

//valores de los parametros
$existeId = false;
$valorId = 0;

if (count($_parametros) > 0) {
    foreach ($_parametros as $p) {
        if (strpos($p, 'id') !== false) {
            $existeId = true;
            $valorId = explode('=', $p)[1];
        }
    }
}

if ($_version == 'v1') {
    if ($_mantenedor == 'mantenedor') {
        switch ($_metodo) {
            case 'GET':
                if ($_header == $_token_get){
                    
                    $LosServicios = '[{
                        "id": "1",
                        "titulo": {
                            "esp": "Consultoría digital"
                        },
                        "texto": {
                            "esp": "Identificamos las fallas y conectamos los puntos entre tu negocio y tu estrategia digital. Nuestro equipo experto cuenta con años de experiencia en la definición de estrategias y hojas de ruta en función de tus objetivos específicos."
                        },
                        "activo": true
                    },
                    {
                        "id": "2",
                        "titulo": {
                            "esp": "Soluciones multiexperiencia"
                        },
                        "texto": {
                            "esp": "Deleitamos a las personas usuarias con experiencias interconectadas a través de aplicaciones web, móviles, interfaces conversacionales, digital twin, IoT y AR. Su arquitectura puede adaptarse y evolucionar para adaptarse a los cambios de tu organización."
                        },
                        "activo": true
                    }
                    ,
                    {
                        "id": "3",
                        "titulo": {
                            "esp": "Evolución de ecosistemas"
                        },
                        "texto": {
                            "esp": "Ayudamos a las empresas a evolucionar y ejecutar sus aplicaciones de forma eficiente, desplegando equipos especializados en la modernización y el mantenimiento de ecosistemas técnicos. Creando soluciones robustas en tecnologías de vanguardia."
                        },
                        "activo": true
                    },
                    {
                        "id": "4",
                        "titulo": {
                            "esp": "Soluciones Low-Code"
                        },
                        "texto": {
                            "esp": "Traemos el poder de las soluciones low-code y no-code para ayudar a nuestros clientes a acelerar su salida al mercado y añadir valor. Aumentamos la productividad y la calidad, reduciendo los requisitos de cualificación de los desarrolladores."
                        },
                        "activo": true
                    }

                    ]';
                    $lista = json_decode($LosServicios, true);

                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                }if ($_header == $_token_get2) {
                    $Nosotros = '[
                        {
                            "mision": {
                                "titulo": {
                                    "esp": "Misi\u00f3n"
                                },
                                "contenido": {
                                    "esp": "Nuestra misi\u00f3n es ofrecer soluciones digitales innovadoras y de alta calidad que impulsen el \u00e9xito de nuestros clientes, ayud\u00e1ndolos a alcanzar sus objetivos empresariales a trav\u00e9s de la tecnolog\u00eda y la creatividad."
                                }
                            },
                            "vision": {
                                "titulo": {
                                    "esp": "Visi\u00f3n"
                                },
                                "contenido": {
                                    "esp": "Nos visualizamos como l\u00edderes en el campo de la consultor\u00eda y desarrollo de software, reconocidos por nuestra excelencia en el servicio al cliente, nuestra capacidad para adaptarnos a las necesidades cambiantes del mercado y nuestra contribuci\u00f3n al crecimiento y la transformaci\u00f3n digital de las empresas"
                                }
                            }
                        }

                    ]';
                    $lista = json_decode($Nosotros, true);

                    http_response_code(200);
                    echo json_encode(["data" => $lista]);
                }
                else{
                    http_response_code(401);
                    echo json_encode(["Error" => "No tiene autorizacion GET"]);
                }
                break;
            default:
                http_response_code(405);
                echo json_encode(["Error" => "No implementado"]);
                break;
        }
    }
}


<?php

return [
    'actions'                   => [
        'actions'           => 'Ações',
        'apply'             => 'Aplicar',
        'back'              => 'Voltar',
        'bulk_templates'    => 'Aplicar Modelo de Atributo',
        'copy'              => 'Copiar',
        'copy_mention'      => 'Copiar [] menção',
        'copy_to_campaign'  => 'Copiar para a Campanha',
        'explore_view'      => 'Visão Aninhada',
        'export'            => 'Exportar',
        'find_out_more'     => 'Descubra mais',
        'go_to'             => 'Ir para :name',
        'json-export'       => 'Exportar (JSON)',
        'manage_links'      => 'Gerenciar Links',
        'more'              => 'Mais Ações',
        'move'              => 'Mover',
        'new'               => 'Novo',
        'new_post'          => 'Nova nota de entidade',
        'next'              => 'Próximo',
        'print'             => 'Imprimir',
        'private'           => 'Privado',
        'public'            => 'Público',
        'reset'             => 'Redefinir',
        'transform'         => 'Transformar',
    ],
    'add'                       => 'Adicionar',
    'alerts'                    => [
        'copy_attribute'    => 'A menção da entidade foi copiada para a sua área de transferência.',
        'copy_mention'      => 'A menção avançada da entidade foi copiada para sua área de transferência.',
    ],
    'boosted'                   => 'Impulsionada',
    'boosted_campaigns'         => 'Campanhas impulsionadas',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Edição em massa e tagging',
        ],
        'age'           => [
            'helper'    => 'Você pode usar + e - antes do número para atualizar a idade naquela quantidade',
        ],
        'delete'        => [
            'title'     => 'Deletando entidades múltiplas',
            'warning'   => 'Tem certeza que você quer deletar as entidades selecionadas?',
        ],
        'edit'          => [
            'tagging'   => 'Ação para tags',
            'tags'      => [
                'add'       => 'Adicionar',
                'remove'    => 'Remover',
            ],
            'title'     => 'Editando múltiplas entidades',
        ],
        'errors'        => [
            'admin'     => 'Apenas administradores de campanha podem mudar o status privado de entidades',
            'general'   => 'Ocorreu um erro ao processar sua ação. Tente novamente e entre em contato conosco se o problema persistir. Mensagem de erro :hint',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Substituir',
            ],
            'helpers'   => [
                'override'  => 'Se selecionado, as permissões das entidades selecionadas serão substituídas por estas. Se desmarcada, as permissões selecionadas serão adicionadas às existentes.',
            ],
            'title'     => 'Alterar permissões para várias entidades',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entidade copiada para :campaign. | [2, *] :count entidades copiadas para :campaign.',
            'editing'           => '{1} :count entidade foi atualizada | [2, *]  :count entidades foram atualizadas',
            'editing_partial'   => '{1} :count/:total entidade foi atualizada. ![2,*] :count/:total entidades foram atualizadas.',
            'permissions'       => '{1} Permissões alteradas para :count entidade | [2, *] Permissões mudadas para :count entidades',
            'private'           => '{1} :count entidade agora é privada | [2, *] :count entidades agora são privadas',
            'public'            => '{1} :count entidade agora é visível | [2, *] :count entidades agora são visíveis',
            'templates'         => '{1} :count entidade que teve um modelo aplicado. |[2, *] :count entidades que tem um modelo aplicado.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Aplicar um modelo a múltiplas entidades',
    ],
    'cancel'                    => 'Cancelar',
    'click_modal'               => [
        'close'     => 'Fechar',
        'confirm'   => 'Confirmar',
        'title'     => 'Confirmar sua ação',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copiar entidades para outra campanha',
        'panel'         => 'Copiar',
        'title'         => 'Copiar :name para outra campanha',
    ],
    'create'                    => 'Criar',
    'datagrid'                  => [
        'empty' => 'Nada para mostrar (ainda)',
    ],
    'delete_modal'              => [
        'close'             => 'Fechar',
        'delete'            => 'Deletar',
        'description'       => 'Tem certeza que deseja remover :tag?',
        'description_final' => 'Você tem certeza que quer remover :tag? Essa ação não pode ser desfeita.',
        'mirrored'          => 'Remover relação espelhada',
        'title'             => 'Confirmação de apagamento',
    ],
    'destroy_many'              => [
        'success'   => 'Deletado :count entity|Deletado :count entities.',
    ],
    'edit'                      => 'Editar',
    'errors'                    => [
        'boosted'                       => 'Esta função está disponível apenas para campanhas impulsionadas',
        'boosted_campaigns'             => 'Esse recurso está somente disponível para :boosted.',
        'node_must_not_be_a_descendant' => 'Nó inválido (tag, localização principal): seria um descendente de si mesmo.',
        'unavailable_feature'           => 'Recurso indisponível',
    ],
    'events'                    => [
        'hint'  => 'Abaixo é mostrada uma lista de todos os calendários em que esta entidade foi adicionada usando a interface "Adicionar um evento a um calendário".',
    ],
    'export'                    => 'Exportar',
    'fields'                    => [
        'ability'               => 'Habilidade',
        'attribute_template'    => 'Modelo de atributo',
        'calendar'              => 'Calendário',
        'calendar_date'         => 'Data do Calendário',
        'character'             => 'Personagem',
        'child'                 => 'Filho',
        'closed'                => 'Fechado',
        'colour'                => 'Cor',
        'copy_abilities'        => 'Copiar Habilidades',
        'copy_attributes'       => 'Copiar atributos',
        'copy_inventory'        => 'Copiar Inventário',
        'copy_links'            => 'Copiar Links de Entidade',
        'copy_permissions'      => 'Copiar permissões (isso substituirá os valores definidos na guia de permissões)',
        'copy_posts'            => 'Copiar postagens (isso inclui as permissões de postagens)',
        'creator'               => 'Criador',
        'dice_roll'             => 'Rolagem de Dados',
        'entity'                => 'Entidade',
        'entity_type'           => 'Tipo de entidade',
        'entry'                 => 'Entrada',
        'event'                 => 'Evento',
        'excerpt'               => 'Resumo',
        'family'                => 'Família',
        'files'                 => 'Arquivos',
        'gallery_header'        => 'Cabeçalho da Galeria',
        'gallery_image'         => 'Imagem da Galeria',
        'has_attributes'        => 'Possui atributos',
        'has_entity_files'      => 'Possui arquivos de entidade',
        'has_entity_notes'      => 'Possui notas de entidade',
        'has_image'             => 'Contém uma imagem',
        'header_image'          => 'Imagem de cabeçalho',
        'image'                 => 'Imagem',
        'is_closed'             => 'Conversa será fechada e não aceitará novas mensagens.',
        'is_private'            => 'Privado',
        'is_private_v2'         => 'Mostre isso apenas para membros da campanha :admin-role. Isso substitui qualquer outra permissão.',
        'is_private_v3'         => 'Mostre isso apenas aos membros da função :admin-role. Isso substitui qualquer outra permissão.',
        'is_star'               => 'Fixado',
        'item'                  => 'Item',
        'journal'               => 'Jornal',
        'location'              => 'Local',
        'locations'             => ':first em :second',
        'map'                   => 'Mapa',
        'name'                  => 'Nome',
        'organisation'          => 'Organização',
        'position'              => 'Posição',
        'privacy'               => 'Privacidade',
        'race'                  => 'Raça',
        'tag'                   => 'Tag',
        'tags'                  => 'Tags',
        'timeline'              => 'Linha do Tempo',
        'tooltip'               => 'Dica',
        'type'                  => 'Tipo',
        'visibility'            => 'Visibilidade',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Clique ou arraste e solte para adicionar um arquivo',
            'manage'    => 'Gerencias arquivos de entidade',
        ],
        'errors'    => [
            'max'       => 'Você atingiu o número máximo (:max) de arquivos para esta entidade.',
            'no_files'  => 'Sem arquivos',
        ],
        'files'     => 'Arquivos carregados',
        'hints'     => [
            'limit'         => 'Cada entidade pode ter no máximo :max arquivos carregados nela.',
            'limitations'   => 'Formatos suportados: :formats. Tamanho máximo do arquivo: :size',
        ],
        'title'     => 'Arquivos de entidade de :name',
    ],
    'filter'                    => 'Filtro',
    'filters'                   => [
        'all'                       => 'Filtrar para todos descendentes',
        'clear'                     => 'Limpar filtros',
        'copy_helper'               => 'Use os filtros copiados em sua área de transferência como valores para filtros em widgets do dashboard e links rápidos.',
        'copy_helper_no_filters'    => 'Defina alguns filtros primeiro para poder copiá-los para sua área de transferência.',
        'copy_to_clipboard'         => 'Copiar filtros para a área de transferência',
        'direct'                    => 'Filtrar para descendentes diretos',
        'filtered'                  => 'Mostrando :count total de :entity',
        'hide'                      => 'Esconder filtros',
        'lists'                     => [
            'desktop'   => [
                'all'       => 'Mostrar todos descendentes (:count)',
                'filtered'  => 'Mostrar descendentes diretos (:count)',
            ],
            'mobile'    => [
                'all'       => 'Mostrar todos (:count)',
                'filtered'  => 'Mostrar direto (:count)',
            ],
        ],
        'mobile'                    => [
            'clear' => 'Limpar',
            'copy'  => 'Área de transferência',
        ],
        'options'                   => [
            'exclude'   => 'Excluir',
            'include'   => 'Incluir',
            'none'      => 'Nenhum',
        ],
        'show'                      => 'Mostrar filtros',
        'sorting'                   => [
            'asc'       => ':field Ascendente',
            'desc'      => ':field Descendente',
            'helper'    => 'Controle em que ordem os resultados aparecem',
        ],
        'title'                     => 'Filtros',
    ],
    'fix-this-issue'            => 'Corrija este problema',
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Adicionar uma data no calendário',
        ],
        'copy_options'  => 'Copiar opções',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copie os seguintes elementos relacionados da origem para a nova entidade.',
    ],
    'hidden'                    => 'Esconder',
    'hints'                     => [
        'attribute_template'    => 'Aplique um modelo de atributo diretamente ao criar ou editar esta entidade.',
        'calendar_date'         => 'Uma data de calendário permite fácil filtragem em listas e também mantém um evento de calendário no calendário selecionado.',
        'gallery_header'        => 'Se a entidade não tiver cabeçalho, exiba uma imagem da galeria da campanha.',
        'gallery_image'         => 'Se a entidade não tiver imagem, exiba uma imagem da galeria da campanha.',
        'header_image'          => 'Esta imagem é colocada acima da entidade. Para obter melhores resultados, use uma imagem larga.',
        'image_limitations'     => 'Formatos suportados: :formats. Tamanho máximo do arquivo: :size.',
        'image_patreon'         => 'Aumentar limite do tamanho das imagens?',
        'image_recommendation'  => 'Dimensões recomendadas :width por :height px.',
        'is_private'            => 'Esconder de "Espectadores"',
        'is_star'               => 'Elementos fixados aparecerão no menu de visão geral da entidade.',
        'tooltip'               => 'Substitua a dica de ferramenta gerada automaticamente pelo conteúdo a seguir.',
        'visibility'            => 'Definir a visibilidade para admin significa que apenas os membros no cargo de admnistrador de campanha  podem ver isso. Definir como apenas eu significa que apenas você pode ver isso.',
    ],
    'history'                   => [
        'created_clean'         => 'Criado pelo :name :date',
        'created_date_clean'    => 'Criado :date',
        'unknown'               => 'Desconhecido',
        'updated_clean'         => 'Última modificação feita por :name :date',
        'updated_date_clean'    => 'Última modificação :date',
        'view'                  => 'Ver histórico da entidade',
    ],
    'image'                     => [
        'error' => 'Nós não fomos capazes de conseguir a imagem requisitada. Pode ser que o site não autorize o download da imagem por nós (tipicamente para Squarespace e DeviantArt), ou o link não está mais válido.',
    ],
    'is_not_private'            => 'Atualmente, esta entidade é privada',
    'is_private'                => 'Essa entidade é privada e não visível para usuários espectadores.',
    'legacy'                    => 'Legado',
    'linking_help'              => 'Como eu posso vincular a outras entidades?',
    'manage'                    => 'Gerenciar',
    'move'                      => [
        'description'   => 'Mover a entidade para outro lugar',
        'errors'        => [
            'permission'        => 'Você não tem permissão para criar entidades deste tipo na campanha escolhida',
            'same_campaign'     => 'Você deve selecionar a campanha para qual moverá esta entidade',
            'unknown_campaign'  => 'Campanha desconhecida',
        ],
        'fields'        => [
            'campaign'  => 'Nova campanha',
            'copy'      => 'Fazer uma cópia',
            'target'    => 'Novo tipo',
        ],
        'hints'         => [
            'campaign'  => 'Você também pode mover esta entidade para outra camapnha',
            'copy'      => 'Selecione esta opção se você deseja criar uma cópia na nova campanha',
            'target'    => 'Esteja ciente que alguns dados podem ser perdidos ao mudar um elemento de um tipo para outro.',
        ],
        'panels'        => [
            'change'    => 'Mudar tipo de entidade',
            'move'      => 'Copiar para outra campanha',
        ],
        'success'       => 'Entidade :name movida.',
        'success_copy'  => 'Entidade :name copiada',
        'title'         => 'Mover :name para outro lugar',
    ],
    'navigation'                => [
        'cancel'    => 'Cancelar',
        'or_cancel' => 'ou :cancel',
    ],
    'new_entity'                => [
        'error' => 'Por favor cheque seus valores',
        'fields'=> [
            'name'  => 'Nome',
        ],
        'title' => 'Nova entidade',
    ],
    'or_cancel'                 => 'ou <a href=":url">cancel</a>',
    'panels'                    => [
        'appearance'            => 'Aparência',
        'attribute_template'    => 'Modelo de atributo',
        'calendar_date'         => 'Data do calendário',
        'entry'                 => 'Entrada',
        'general_information'   => 'Informações Gerais',
        'move'                  => 'Mover',
        'system'                => 'Sistema',
    ],
    'permissions'               => [
        'action'            => 'Ação',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Permitir',
                'deny'      => 'Negar',
                'ignore'    => 'Pular',
                'remove'    => 'Remover',
            ],
            'bulk_entity'   => [
                'allow'     => 'Permitir',
                'deny'      => 'Negar',
                'inherit'   => 'Herdar',
            ],
            'delete'        => 'Deletar',
            'edit'          => 'Editar',
            'entity_note'   => 'Notas da entidade',
            'read'          => 'Ler',
            'toggle'        => 'Alternar',
        ],
        'allowed'           => 'Permitido',
        'fields'            => [
            'member'    => 'Membro',
            'role'      => 'Cargo',
        ],
        'helper'            => 'Use essa interface para escolher quais usuários e cargos podem interagir com essa entidade.',
        'helpers'           => [
            'setup' => 'Use esta interface para ajustar como funções e usuários podem interagir com esta entidade. :allow permitirá que o usuário ou função execute esta ação. :deny irá negar a eles essa ação. :inherit usará o cargo do usuário ou a permissão do cargo principal. Um usuário definido como :allow é capaz de realizar a ação, mesmo se sua função for definida como :deny',
        ],
        'inherited'         => 'Este cargo já tem esta permissão para este tipo de entidade',
        'inherited_by'      => 'Este usuário faz parte do cargo :role que concede essas permissões neste tipo de entidade.',
        'success'           => 'Permissões salvas.',
        'title'             => 'Permissões',
        'too_many_members'  => 'Esta campanha tem muitos membros (> 10) para exibir nesta interface. Use o botão permissão na visualização da entidade para controlar as permissões em detalhes.',
    ],
    'placeholders'              => [
        'ability'       => 'Escolha uma habilidade',
        'calendar'      => 'Escolha um calendário',
        'character'     => 'Escolha um personagem',
        'entity'        => 'Entidade',
        'event'         => 'Escolha um evento',
        'family'        => 'Escolha uma família',
        'gallery_image' => 'Escolha uma imagem da galeria da campanha',
        'image_url'     => 'Você também pode dar upload de uma imagem por uma URL',
        'item'          => 'Escolha um item',
        'journal'       => 'Escolha um jornal',
        'location'      => 'Escolha um local',
        'map'           => 'Escolha um mapa',
        'note'          => 'Escolha uma nota',
        'organisation'  => 'Escolha uma organização',
        'quest'         => 'Escolha uma missão',
        'race'          => 'Escolha uma raça',
        'tag'           => 'Escolha uma tag',
        'timeline'      => 'Escolha uma linha do tempo',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Nova relação',
        ],
        'fields'    => [
            'location'  => 'Local',
            'name'      => 'Nome',
            'relation'  => 'Relação',
        ],
        'hint'      => 'As relações entre entidades podem ser configuradas para representar suas conexões.',
    ],
    'remove'                    => 'Remover',
    'rename'                    => 'Renomear',
    'save'                      => 'Salvar',
    'save_and_close'            => 'Salvar e Fechar',
    'save_and_copy'             => 'Salvar e Copiar',
    'save_and_new'              => 'Salvar e Novo',
    'save_and_update'           => 'Salvar e Editar',
    'save_and_view'             => 'Salvar e Visualizar',
    'search'                    => 'Buscar',
    'select'                    => 'Selecionar',
    'superboosted_campaigns'    => 'Campanhas Super Impulsionadas',
    'tabs'                      => [
        'abilities'     => 'Habilidades',
        'assets'        => 'Recursos',
        'attributes'    => 'Atributos',
        'boost'         => 'Impulso',
        'calendars'     => 'Calendários',
        'connections'   => 'Conexões',
        'default'       => 'Padrão',
        'events'        => 'Eventos',
        'inventory'     => 'Inventário',
        'links'         => 'Links',
        'map-points'    => 'Pontos do Mapa',
        'mentions'      => 'Menções',
        'menu'          => 'Menu',
        'notes'         => 'Notas da entidade',
        'permissions'   => 'Permissões',
        'profile'       => 'Perfil',
        'quests'        => 'Missões',
        'relations'     => 'Relações',
        'reminders'     => 'Lembretes',
        'story'         => 'Visão Geral',
        'timelines'     => 'Linhas do Tempo',
        'tooltip'       => 'Dica',
    ],
    'tooltips'                  => [
        'boosted_feature'   => 'Recurso da campanha impulsionada',
    ],
    'update'                    => 'Atualizar',
    'users'                     => [
        'unknown'   => 'Desconhecido',
    ],
    'view'                      => 'Ver',
    'visibilities'              => [
        'admin'         => 'Adm',
        'admin-self'    => 'Eu e o Adm',
        'all'           => 'Todos',
        'members'       => 'Membros',
        'self'          => 'Apenas eu',
    ],
];

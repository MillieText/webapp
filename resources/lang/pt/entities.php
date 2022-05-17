<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Criado recentemente',
    'recently_created_pages' => 'Páginas Criadas Recentemente',
    'recently_updated_pages' => 'Páginas Atualizadas Recentemente',
    'recently_created_chapters' => 'Capítulos Criados Recentemente',
    'recently_created_books' => 'Livros Criados Recentemente',
    'recently_created_shelves' => 'Estantes Criadas Recentemente',
    'recently_update' => 'Atualizados Recentemente',
    'recently_viewed' => 'Visualizados Recentemente',
    'recent_activity' => 'Atividade Recente',
    'create_now' => 'Criar um agora',
    'revisions' => 'Revisões',
    'meta_revision' => 'Revisão #:revisionCount',
    'meta_created' => 'Criado :timeLength',
    'meta_created_name' => 'Criado :timeLength por :user',
    'meta_updated' => 'Atualizado :timeLength',
    'meta_updated_name' => 'Atualizado :timeLength por :user',
    'meta_owned_name' => 'Propriedade de :user',
    'entity_select' => 'Seleção de Entidade',
    'images' => 'Imagens',
    'my_recent_drafts' => 'Os Meus Rascunhos Recentes',
    'my_recently_viewed' => 'Visualizados Recentemente Por Mim',
    'my_most_viewed_favourites' => 'Os Meus Favoritos Mais Visualizados',
    'my_favourites' => 'Os Meus Favoritos',
    'no_pages_viewed' => 'Você não viu nenhuma página',
    'no_pages_recently_created' => 'Nenhuma página foi recentemente criada',
    'no_pages_recently_updated' => 'Nenhuma página foi recentemente atualizada',
    'export' => 'Exportar',
    'export_html' => 'Arquivo Web contido',
    'export_pdf' => 'Arquivo PDF',
    'export_text' => 'Arquivo Texto',
    'export_md' => 'Ficheiro Markdown',

    // Permissions and restrictions
    'permissions' => 'Permissões',
    'permissions_intro' => 'Uma vez ativadas, estas permissões terão prioridade sobre quaisquer outro conjunto de permissões.',
    'permissions_enable' => 'Ativar Permissões Personalizadas',
    'permissions_save' => 'Guardar Permissões',
    'permissions_owner' => 'Proprietário',

    // Search
    'search_results' => 'Resultado(s) da Pesquisa',
    'search_total_results_found' => ':count resultado encontrado|:count resultados encontrados',
    'search_clear' => 'Limpar Pesquisa',
    'search_no_pages' => 'Nenhuma página corresponde à pesquisa',
    'search_for_term' => 'Pesquisar por :term',
    'search_more' => 'Mais Resultados',
    'search_advanced' => 'Pesquisa Avançada',
    'search_terms' => 'Termos da Pesquisa',
    'search_content_type' => 'Tipo de Conteúdo',
    'search_exact_matches' => 'Correspondências Exatas',
    'search_tags' => 'Persquisar Tags',
    'search_options' => 'Opções',
    'search_viewed_by_me' => 'Visualizado por mim',
    'search_not_viewed_by_me' => 'Não visualizado por mim',
    'search_permissions_set' => 'Permissão definida',
    'search_created_by_me' => 'Criado por mim',
    'search_updated_by_me' => 'Atualizado por mim',
    'search_owned_by_me' => 'Propriedade minha',
    'search_date_options' => 'Opções de Data',
    'search_updated_before' => 'Atualizado antes de',
    'search_updated_after' => 'Atualizado depois de',
    'search_created_before' => 'Criado antes de',
    'search_created_after' => 'Criado depois de',
    'search_set_date' => 'Definir Data',
    'search_update' => 'Atualizar pesquisa',

    // Shelves
    'shelf' => 'Estante',
    'shelves' => 'Estantes',
    'x_shelves' => ':count Estante|:count Estantes',
    'shelves_long' => 'Estantes de Livros',
    'shelves_empty' => 'Nenhuma estante foi criada',
    'shelves_create' => 'Criar Nova Estante',
    'shelves_popular' => 'Estantes Populares',
    'shelves_new' => 'Estantes Novas',
    'shelves_new_action' => 'Nova Estante',
    'shelves_popular_empty' => 'As estantes mais populares serão mostradas aqui.',
    'shelves_new_empty' => 'As mais recentes estantes criadas serão mostradas aqui.',
    'shelves_save' => 'Guardar Estante',
    'shelves_books' => 'Livros nesta estante',
    'shelves_add_books' => 'Adicionar livros a esta estante',
    'shelves_drag_books' => 'Arraste livros aqui para adicioná-los a esta estante',
    'shelves_empty_contents' => 'Esta estante não tem livros atribuídos',
    'shelves_edit_and_assign' => 'Editar estante para atribuir livros',
    'shelves_edit_named' => 'Editar Estante de Livros :name',
    'shelves_edit' => 'Editar Estante de Livros',
    'shelves_delete' => 'Eliminar Estante de Livros',
    'shelves_delete_named' => 'Excluir Prateleira de Livros :name',
    'shelves_delete_explain' => "A ação vai eliminar a estante de nome ':name'. Os livros nela presentes não serão eliminados.",
    'shelves_delete_confirmation' => 'Tem a certeza que quer eliminar esta estante de livros?',
    'shelves_permissions' => 'Permissões da Estante',
    'shelves_permissions_updated' => 'Permissões da Estante de Livros Atualizada',
    'shelves_permissions_active' => 'Permissões da Estante de Livros Ativas',
    'shelves_permissions_cascade_warning' => 'As permissões nas estantes não são passadas automaticamente em efeito dominó para os livros contidos. Isto acontece porque um livro pode existir em várias prateleiras. As permissões podem, no entanto, ser copiadas para livros filhos usando a opção encontrada abaixo.',
    'shelves_copy_permissions_to_books' => 'Copiar Permissões para Livros',
    'shelves_copy_permissions' => 'Copiar Permissões',
    'shelves_copy_permissions_explain' => 'Isto aplicará as configurações de permissões atuais desta estante a todos os livros nela contidos. Antes de ativar, assegure-se de que quaisquer alterações nas permissões desta estante foram guardadas.',
    'shelves_copy_permission_success' => 'Permissões de estante copiadas para :count livros',

    // Books
    'book' => 'Livro',
    'books' => 'Livros',
    'x_books' => ':count Livro|:count Livros',
    'books_empty' => 'Nenhum livro foi criado',
    'books_popular' => 'Livros Populares',
    'books_recent' => 'Livros Recentes',
    'books_new' => 'Livros Novos',
    'books_new_action' => 'Novo Livro',
    'books_popular_empty' => 'Os livros mais populares serão mostrados aqui.',
    'books_new_empty' => 'Os livros mais recentemente criados serão mostrados aqui.',
    'books_create' => 'Criar Livro Novo',
    'books_delete' => 'Eliminar Livro',
    'books_delete_named' => 'Eliminar Livro :bookName',
    'books_delete_explain' => 'A ação vai eliminar o livro com de nome \':bookName\'. Todas as páginas e capítulos serão também removidos.',
    'books_delete_confirmation' => 'Tem a certeza que quer eliminar este livro?',
    'books_edit' => 'Editar Livro',
    'books_edit_named' => 'Editar Livro :bookName',
    'books_form_book_name' => 'Nome do Livro',
    'books_save' => 'Guardar Livro',
    'books_permissions' => 'Permissões do Livro',
    'books_permissions_updated' => 'Permissões do Livro Atualizadas',
    'books_empty_contents' => 'Nenhuma página ou capítulo foram criados para este livro.',
    'books_empty_create_page' => 'Criar uma nova página',
    'books_empty_sort_current_book' => 'Ordenar o livro atual',
    'books_empty_add_chapter' => 'Adicionar um capítulo',
    'books_permissions_active' => 'Permissões do Livro Ativas',
    'books_search_this' => 'Pesquisar neste livro',
    'books_navigation' => 'Navegação do Livro',
    'books_sort' => 'Ordenar Conteúdos do Livro',
    'books_sort_named' => 'Ordenar Livro :bookName',
    'books_sort_name' => 'Ordenar por Nome',
    'books_sort_created' => 'Ordenar por Data de Criação',
    'books_sort_updated' => 'Ordenar por Data de Atualização',
    'books_sort_chapters_first' => 'Capítulos Primeiro',
    'books_sort_chapters_last' => 'Capítulos por Último',
    'books_sort_show_other' => 'Mostrar Outros Livros',
    'books_sort_save' => 'Guardar Nova Ordenação',
    'books_copy' => 'Copiar livro',
    'books_copy_success' => 'Livro criado com sucesso',

    // Chapters
    'chapter' => 'Capítulo',
    'chapters' => 'Capítulos',
    'x_chapters' => ':count Capítulo|:count Capítulos',
    'chapters_popular' => 'Capítulos Populares',
    'chapters_new' => 'Novo Capítulo',
    'chapters_create' => 'Criar Novo Capítulo',
    'chapters_delete' => 'Eliminar Capítulo',
    'chapters_delete_named' => 'Eliminar Capítulo :chapterName',
    'chapters_delete_explain' => 'Isto irá eliminar o capítulo com o nome \':chapterName\'. Todas as páginas existentes dentro do mesmo serão também eliminadas.',
    'chapters_delete_confirm' => 'Tem certeza que deseja eliminar o capítulo?',
    'chapters_edit' => 'Editar Capítulo',
    'chapters_edit_named' => 'Editar Capítulo :chapterName',
    'chapters_save' => 'Guardar Capítulo',
    'chapters_move' => 'Mover Capítulo',
    'chapters_move_named' => 'Mover Capítulo :chapterName',
    'chapter_move_success' => 'Capítulo movido para :bookName',
    'chapters_copy' => 'Copiar capítulo',
    'chapters_copy_success' => 'Capítulo copiado com sucesso',
    'chapters_permissions' => 'Permissões do Capítulo',
    'chapters_empty' => 'Nenhuma página existente neste capítulo.',
    'chapters_permissions_active' => 'Permissões de Capítulo Ativas',
    'chapters_permissions_success' => 'Permissões de Capítulo Atualizadas',
    'chapters_search_this' => 'Pesquisar neste Capítulo',

    // Pages
    'page' => 'Página',
    'pages' => 'Páginas',
    'x_pages' => ':count Página|:count Páginas',
    'pages_popular' => 'Páginas Populares',
    'pages_new' => 'Nova Página',
    'pages_attachments' => 'Anexos',
    'pages_navigation' => 'Navegação da Página',
    'pages_delete' => 'Eliminar Página',
    'pages_delete_named' => 'Eliminar Página :pageName',
    'pages_delete_draft_named' => 'Eliminar Rascunho de Página de nome :pageName',
    'pages_delete_draft' => 'Eliminar Rascunho de Página',
    'pages_delete_success' => 'Página eliminada',
    'pages_delete_draft_success' => 'Rascunho de página eliminado',
    'pages_delete_confirm' => 'Tem certeza que deseja eliminar a página?',
    'pages_delete_draft_confirm' => 'Tem certeza que deseja eliminar o rascunho de página?',
    'pages_editing_named' => 'A Editar a Página :pageName',
    'pages_edit_draft_options' => 'Opções de Rascunho',
    'pages_edit_save_draft' => 'Guardar Rascunho',
    'pages_edit_draft' => 'Editar Rascunho de Página',
    'pages_editing_draft' => 'A Editar Rascunho',
    'pages_editing_page' => 'A Editar Página',
    'pages_edit_draft_save_at' => 'Rascunho guardado em ',
    'pages_edit_delete_draft' => 'Eliminar Rascunho',
    'pages_edit_discard_draft' => 'Descartar Rascunho',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_set_changelog' => 'Relatar Alterações',
    'pages_edit_enter_changelog_desc' => 'Digite uma breve descrição das alterações efetuadas por si',
    'pages_edit_enter_changelog' => 'Inserir Alterações',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Guardar Página',
    'pages_title' => 'Título da Página',
    'pages_name' => 'Nome da Página',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Pré-Visualização',
    'pages_md_insert_image' => 'Inserir Imagem',
    'pages_md_insert_link' => 'Inserir Link para Entidade',
    'pages_md_insert_drawing' => 'Inserir Desenho',
    'pages_not_in_chapter' => 'A página não está dentro de um capítulo',
    'pages_move' => 'Mover Página',
    'pages_move_success' => 'Pagina movida para ":parentName"',
    'pages_copy' => 'Copiar Página',
    'pages_copy_desination' => 'Destino da Cópia',
    'pages_copy_success' => 'Página copiada com sucesso',
    'pages_permissions' => 'Permissões da Página',
    'pages_permissions_success' => 'Permissões da Página atualizadas',
    'pages_revision' => 'Revisão',
    'pages_revisions' => 'Revisões da Página',
    'pages_revisions_named' => 'Revisões de Página para :pageName',
    'pages_revision_named' => 'Revisão de Página para :pageName',
    'pages_revision_restored_from' => 'Recuperado de #:id; :summary',
    'pages_revisions_created_by' => 'Criado por',
    'pages_revisions_date' => 'Data da Revisão',
    'pages_revisions_number' => '#',
    'pages_revisions_numbered' => 'Revisão #:id',
    'pages_revisions_numbered_changes' => 'Alterações da Revisão #:id',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Relatório de Alterações',
    'pages_revisions_changes' => 'Alterações',
    'pages_revisions_current' => 'Versão Atual',
    'pages_revisions_preview' => 'Pré-Visualização',
    'pages_revisions_restore' => 'Restaurar',
    'pages_revisions_none' => 'Essa página não tem revisões',
    'pages_copy_link' => 'Copiar Link',
    'pages_edit_content_link' => 'Editar Conteúdo',
    'pages_permissions_active' => 'Permissões de Página Ativas',
    'pages_initial_revision' => 'Publicação Inicial',
    'pages_initial_name' => 'Nova Página',
    'pages_editing_draft_notification' => 'Você está atualmente a editar um rascunho que foi guardado pela última vez a :timeDiff.',
    'pages_draft_edited_notification' => 'Esta página entretanto já foi atualizada. É recomendado que você descarte este rascunho.',
    'pages_draft_page_changed_since_creation' => 'Esta página foi atualizada desde que este rascunho foi criado. É recomendável que descarte este rascunho ou tenha cuidado para não sobrescrever nenhuma alteração de página.',
    'pages_draft_edit_active' => [
        'start_a' => ':count usuários iniciaram a edição dessa página',
        'start_b' => ':userName iniciou a edição desta página',
        'time_a' => 'desde que a página foi atualizada pela última vez',
        'time_b' => 'nos últimos :minCount minutos',
        'message' => ':start :time. Tenha cuidado para não sobrescrever atualizações de outras pessoas!',
    ],
    'pages_draft_discarded' => 'Rascunho descartado. O editor foi atualizado com o conteúdo atual da página',
    'pages_specific' => 'Página Específica',
    'pages_is_template' => 'Modelo de Página',

    // Editor Sidebar
    'page_tags' => 'Etiquetas de Página',
    'chapter_tags' => 'Etiquetas do Capítulo',
    'book_tags' => 'Etiquetas do Livro',
    'shelf_tags' => 'Etiquetas da Prateleira',
    'tag' => 'Etiqueta',
    'tags' =>  'Etiquetas',
    'tag_name' =>  'Nome da Etiqueta',
    'tag_value' => 'Valor da Etiqueta (Opcional)',
    'tags_explain' => "Adicione algumas etiquetas para melhor categorizar o seu conteúdo. \n Você poderá atribuir valores às etiquetas para uma organização mais complexa.",
    'tags_add' => 'Adicionar outra etiqueta',
    'tags_remove' => 'Remover esta etiqueta',
    'tags_usages' => 'Total de marcadores usados',
    'tags_assigned_pages' => 'Atribuído às páginas',
    'tags_assigned_chapters' => 'Atribuído aos Capítulos',
    'tags_assigned_books' => 'Atribuído a Livros',
    'tags_assigned_shelves' => 'Atribuído a Prateleiras',
    'tags_x_unique_values' => ':count valores únicos',
    'tags_all_values' => 'Todos os valores',
    'tags_view_tags' => 'Ver Marcadores',
    'tags_view_existing_tags' => 'Ver marcadores existentes',
    'tags_list_empty_hint' => 'As tags podem ser atribuídas através da barra lateral do editor de página ou ao editar os detalhes de um livro, capítulo ou prateleira.',
    'attachments' => 'Anexos',
    'attachments_explain' => 'Carregue alguns arquivos ou anexe links para serem exibidos na sua página. Eles estarão visíveis na barra lateral à direita.',
    'attachments_explain_instant_save' => 'As mudanças são guardadas instantaneamente.',
    'attachments_items' => 'Itens Anexados',
    'attachments_upload' => 'Carregamento de Arquivos',
    'attachments_link' => 'Anexar Link',
    'attachments_set_link' => 'Definir Link',
    'attachments_delete' => 'Tem certeza de que deseja eliminar este anexo?',
    'attachments_dropzone' => 'Arraste arquivos para aqui ou clique para os anexar',
    'attachments_no_files' => 'Nenhum arquivo foi enviado',
    'attachments_explain_link' => 'Pode anexar um link se preferir não fazer o carregamento do arquivo. O link poderá ser para uma outra página ou para um arquivo na nuvem.',
    'attachments_link_name' => 'Nome do Link',
    'attachment_link' => 'Link do Anexo',
    'attachments_link_url' => 'Link para o Arquivo',
    'attachments_link_url_hint' => 'Url do sítio ou arquivo',
    'attach' => 'Anexar',
    'attachments_insert_link' => 'Adicionar Link de Anexo à Página',
    'attachments_edit_file' => 'Editar Arquivo',
    'attachments_edit_file_name' => 'Nome do Arquivo',
    'attachments_edit_drop_upload' => 'Arraste arquivos para aqui ou carregue para anexar arquivos e sobrescreve-los',
    'attachments_order_updated' => 'Ordem dos anexos atualizada',
    'attachments_updated_success' => 'Detalhes dos anexos atualizados',
    'attachments_deleted' => 'Anexo eliminado',
    'attachments_file_uploaded' => 'Carregamento de arquivo efetuado com sucesso',
    'attachments_file_updated' => 'Arquivo atualizado com sucesso',
    'attachments_link_attached' => 'Link anexado com sucesso à página',
    'templates' => 'Modelos',
    'templates_set_as_template' => 'A página é um modelo',
    'templates_explain_set_as_template' => 'Pode definir esta página como um modelo para que o seu conteúdo possa ser utilizado para criar outras páginas. Outros usuários poderão utilizar esta página como modelo se tiverem permissão para visualiza-la.',
    'templates_replace_content' => 'Substituir conteúdo da página',
    'templates_append_content' => 'Adicionar ao fim do conteúdo da página',
    'templates_prepend_content' => 'Adicionar ao início do conteúdo da página',

    // Profile View
    'profile_user_for_x' => 'Utilizador por :time',
    'profile_created_content' => 'Conteúdo Criado',
    'profile_not_created_pages' => ':userName não criou páginas',
    'profile_not_created_chapters' => ':userName não criou capítulos',
    'profile_not_created_books' => ':userName não criou livros',
    'profile_not_created_shelves' => ':userName não criou estantes',

    // Comments
    'comment' => 'Comentário',
    'comments' => 'Comentários',
    'comment_add' => 'Adicionar Comentário',
    'comment_placeholder' => 'Digite aqui os seus comentários',
    'comment_count' => '{0} Nenhum comentário|{1} 1 Comentário|[2,*] :count Comentários',
    'comment_save' => 'Guardar comentário',
    'comment_saving' => 'Guardar comentário...',
    'comment_deleting' => 'Remover comentário...',
    'comment_new' => 'Comentário Novo',
    'comment_created' => 'comentado :createDiff',
    'comment_updated' => 'A editar :updateDiff por :username',
    'comment_deleted_success' => 'Comentário removido',
    'comment_created_success' => 'Comentário adicionado',
    'comment_updated_success' => 'Comentário editado',
    'comment_delete_confirm' => 'Tem a certeza de que deseja eliminar este comentário?',
    'comment_in_reply_to' => 'Em resposta à :commentId',

    // Revision
    'revision_delete_confirm' => 'Tem a certeza de que deseja eliminar esta revisão?',
    'revision_restore_confirm' => 'Tem a certeza que deseja restaurar esta revisão? O conteúdo atual da página será substituído.',
    'revision_delete_success' => 'Revisão excluída',
    'revision_cannot_delete_latest' => 'Não é possível eliminar a revisão mais recente.',

    // Copy view
    'copy_consider' => 'Ao copiar conteúdo considere, por favor, a informação abaixo.',
    'copy_consider_permissions' => 'Configurações personalizada não serão copiadas.',
    'copy_consider_owner' => 'Você se tornará o proprietário de todos os conteúdos copiados.',
    'copy_consider_images' => 'A imagem da página não será duplicada e as imagens originais manterão sua relação com a página para a qual foram enviadas originalmente.',
    'copy_consider_attachments' => 'Anexos da página não serão copiados.',
    'copy_consider_access' => 'Uma alteração de localização, proprietário ou permissões pode resultar em que este conteúdo seja acessível para aqueles previamente sem acesso.',
];

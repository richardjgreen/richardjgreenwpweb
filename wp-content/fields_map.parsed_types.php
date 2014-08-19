<?php return array (
  '' => 
  array (
  ),
  'wp_users' => 
  array (
    'ID' => 
    array (
      'type' => 'primary_id',
    ),
    'display_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_activation_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_email' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_login' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_nicename' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_pass' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_registered' => 
    array (
      'type' => 'date',
    ),
    'user_status' => 
    array (
      'type' => 'int',
    ),
    'user_url' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_usermeta' => 
  array (
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
    'umeta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_terms' => 
  array (
    'name' => 
    array (
      'type' => 'nvarchar',
    ),
    'slug' => 
    array (
      'type' => 'nvarchar',
    ),
    'term_group' => 
    array (
      'type' => 'int',
    ),
    'term_id' => 
    array (
      'type' => 'primary_id',
    ),
  ),
  'wp_term_taxonomy' => 
  array (
    'count' => 
    array (
      'type' => 'int',
    ),
    'description' => 
    array (
      'type' => 'nvarchar',
    ),
    'parent' => 
    array (
      'type' => 'int',
    ),
    'taxonomy' => 
    array (
      'type' => 'nvarchar',
    ),
    'term_id' => 
    array (
      'type' => 'int',
    ),
    'term_taxonomy_id' => 
    array (
      'type' => 'primary_id',
    ),
  ),
  'wp_term_relationships' => 
  array (
    'object_id' => 
    array (
      'type' => 'primary_id',
    ),
    'term_order' => 
    array (
      'type' => 'int',
    ),
    'term_taxonomy_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_commentmeta' => 
  array (
    'comment_id' => 
    array (
      'type' => 'int',
    ),
    'meta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_comments' => 
  array (
    'comment_ID' => 
    array (
      'type' => 'primary_id',
    ),
    'comment_agent' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_approved' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_IP' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_email' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_author_url' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_content' => 
    array (
      'type' => 'nvarchar',
    ),
    'comment_date' => 
    array (
      'type' => 'date',
    ),
    'comment_date_gmt' => 
    array (
      'type' => 'date',
    ),
    'comment_karma' => 
    array (
      'type' => 'int',
    ),
    'comment_parent' => 
    array (
      'type' => 'int',
    ),
    'comment_post_ID' => 
    array (
      'type' => 'int',
    ),
    'comment_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_links' => 
  array (
    'link_description' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_id' => 
    array (
      'type' => 'primary_id',
    ),
    'link_image' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_notes' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_owner' => 
    array (
      'type' => 'int',
    ),
    'link_rating' => 
    array (
      'type' => 'int',
    ),
    'link_rel' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_rss' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_target' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_updated' => 
    array (
      'type' => 'date',
    ),
    'link_url' => 
    array (
      'type' => 'nvarchar',
    ),
    'link_visible' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_options' => 
  array (
    'autoload' => 
    array (
      'type' => 'nvarchar',
    ),
    'option_id' => 
    array (
      'type' => 'primary_id',
    ),
    'option_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'option_value' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_postmeta' => 
  array (
    'meta_id' => 
    array (
      'type' => 'primary_id',
    ),
    'meta_key' => 
    array (
      'type' => 'nvarchar',
    ),
    'meta_value' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_posts' => 
  array (
    'ID' => 
    array (
      'type' => 'primary_id',
    ),
    'comment_count' => 
    array (
      'type' => 'int',
    ),
    'comment_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'guid' => 
    array (
      'type' => 'nvarchar',
    ),
    'menu_order' => 
    array (
      'type' => 'int',
    ),
    'ping_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'pinged' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_author' => 
    array (
      'type' => 'int',
    ),
    'post_content' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_content_filtered' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_date' => 
    array (
      'type' => 'date',
    ),
    'post_date_gmt' => 
    array (
      'type' => 'date',
    ),
    'post_excerpt' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_mime_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_modified' => 
    array (
      'type' => 'date',
    ),
    'post_modified_gmt' => 
    array (
      'type' => 'date',
    ),
    'post_name' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_parent' => 
    array (
      'type' => 'int',
    ),
    'post_password' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_title' => 
    array (
      'type' => 'nvarchar',
    ),
    'post_type' => 
    array (
      'type' => 'nvarchar',
    ),
    'to_ping' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wp_rp_tags' => 
  array (
  ),
  'wp_terms ADD UNIQUE KEY slug' => 
  array (
  ),
  'wp_term_taxonomy ADD UNIQUE KEY term_id_taxonomy' => 
  array (
  ),
  'wp_options ADD UNIQUE KEY option_name' => 
  array (
  ),
  'wp_post_vote_counts' => 
  array (
    'downvote_count' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
    'upvote_count' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_post_voting_mode' => 
  array (
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
    'vote_mode' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_registered_user_votes' => 
  array (
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
    'user_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_post_voting_style' => 
  array (
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'orientation' => 
    array (
      'type' => 'int',
    ),
    'position' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_post_voting_settings' => 
  array (
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'max_link' => 
    array (
      'type' => 'int',
    ),
    'neighbour' => 
    array (
      'type' => 'int',
    ),
    'repeat_voting' => 
    array (
      'type' => 'int',
    ),
    'row_per_page' => 
    array (
      'type' => 'int',
    ),
    'voting_interval' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wpv_voting' => 
  array (
    'ID' => 
    array (
      'type' => 'primary_id',
    ),
    'author_id' => 
    array (
      'type' => 'int',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
    'vote_count' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wpv_voting_meta' => 
  array (
  ),
  'wp_wpo_campaign' => 
  array (
    'active' => 
    array (
      'type' => 'int',
    ),
    'allowpings' => 
    array (
      'type' => 'int',
    ),
    'authorid' => 
    array (
      'type' => 'int',
    ),
    'cacheimages' => 
    array (
      'type' => 'int',
    ),
    'comment_status' => 
    array (
      'type' => 'nvarchar',
    ),
    'count' => 
    array (
      'type' => 'int',
    ),
    'created_on' => 
    array (
      'type' => 'date',
    ),
    'dopingbacks' => 
    array (
      'type' => 'int',
    ),
    'feeddate' => 
    array (
      'type' => 'int',
    ),
    'frequency' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'lastactive' => 
    array (
      'type' => 'date',
    ),
    'linktosource' => 
    array (
      'type' => 'int',
    ),
    'max' => 
    array (
      'type' => 'int',
    ),
    'posttype' => 
    array (
      'type' => 'nvarchar',
    ),
    'slug' => 
    array (
      'type' => 'nvarchar',
    ),
    'template' => 
    array (
      'type' => 'MEDIUMTEXT',
    ),
    'title' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wpo_campaign_category' => 
  array (
    'campaign_id' => 
    array (
      'type' => 'int',
    ),
    'category_id' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
  ),
  'wp_wpo_campaign_feed' => 
  array (
    'campaign_id' => 
    array (
      'type' => 'int',
    ),
    'count' => 
    array (
      'type' => 'int',
    ),
    'description' => 
    array (
      'type' => 'nvarchar',
    ),
    'hash' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'lastactive' => 
    array (
      'type' => 'date',
    ),
    'logo' => 
    array (
      'type' => 'nvarchar',
    ),
    'title' => 
    array (
      'type' => 'nvarchar',
    ),
    'type' => 
    array (
      'type' => 'nvarchar',
    ),
    'url' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wpo_campaign_post' => 
  array (
    'campaign_id' => 
    array (
      'type' => 'int',
    ),
    'feed_id' => 
    array (
      'type' => 'int',
    ),
    'hash' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'post_id' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_wpo_campaign_word' => 
  array (
    'campaign_id' => 
    array (
      'type' => 'int',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'regex' => 
    array (
      'type' => 'int',
    ),
    'relink' => 
    array (
      'type' => 'nvarchar',
    ),
    'rewrite' => 
    array (
      'type' => 'int',
    ),
    'rewrite_to' => 
    array (
      'type' => 'nvarchar',
    ),
    'word' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_wpo_log' => 
  array (
    'created_on' => 
    array (
      'type' => 'date',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'message' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_bwps_log' => 
  array (
    'data' => 
    array (
      'type' => 'MEDIUMTEXT',
    ),
    'host' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'mem_used' => 
    array (
      'type' => 'nvarchar',
    ),
    'referrer' => 
    array (
      'type' => 'nvarchar',
    ),
    'timestamp' => 
    array (
      'type' => 'int',
    ),
    'type' => 
    array (
      'type' => 'int',
    ),
    'url' => 
    array (
      'type' => 'nvarchar',
    ),
    'user' => 
    array (
      'type' => 'int',
    ),
    'username' => 
    array (
      'type' => 'nvarchar',
    ),
  ),
  'wp_bwps_lockouts' => 
  array (
    'active' => 
    array (
      'type' => 'int',
    ),
    'exptime' => 
    array (
      'type' => 'int',
    ),
    'host' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'primary_id',
    ),
    'starttime' => 
    array (
      'type' => 'int',
    ),
    'type' => 
    array (
      'type' => 'int',
    ),
    'user' => 
    array (
      'type' => 'int',
    ),
  ),
  'wp_nxs_log' => 
  array (
    'act' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
    'date' => 
    array (
      'type' => 'date',
    ),
    'extInfo' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'int',
    ),
    'msg' => 
    array (
      'type' => 'nvarchar',
    ),
    'nt' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
    'type' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
  ),
  'meANoQms_wp_rp_tags' => 
  array (
  ),
  'meANoQms_nxs_log' => 
  array (
    'act' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
    'date' => 
    array (
      'type' => 'date',
    ),
    'extInfo' => 
    array (
      'type' => 'nvarchar',
    ),
    'id' => 
    array (
      'type' => 'int',
    ),
    'msg' => 
    array (
      'type' => 'nvarchar',
    ),
    'nt' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
    'type' => 
    array (
      'type' => 'VARCHAR(255)',
    ),
  ),
  'meANoQms_terms ADD UNIQUE KEY slug' => 
  array (
  ),
  'meANoQms_term_taxonomy ADD UNIQUE KEY term_id_taxonomy' => 
  array (
  ),
  'meANoQms_options ADD UNIQUE KEY option_name' => 
  array (
  ),
  'meANoQms_posts ADD INDEX' => 
  array (
  ),
  'meANoQms_categories ADD INDEX' => 
  array (
  ),
  'meANoQms_comments ADD INDEX' => 
  array (
  ),
  'meANoQms_links ADD INDEX' => 
  array (
  ),
)
 ?>
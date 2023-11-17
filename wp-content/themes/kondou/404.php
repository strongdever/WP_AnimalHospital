<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/*
 Union Theme - Version: 1.4
*/

get_header();
?>

<main id="page-404" class="page-404">

  <section class="p_breadcrumbs_section">
    <div class="container">
      <ol>
        <li><a href="<?php echo HOME; ?>">TOP</a></li>
        <li>404</li>
      </ol>
    </div>
  </section>

  <section class="p_main_section">
    <div class="container">
      <div class="m_txt text_center sp_text_left mb_16">指定されたページまたはファイルは存在しません</div>
      <div class="m_txt text_center sp_text_left">URL、ファイル名にタイプミスがないかご確認ください。<br>指定されたページは削除されたか、移動した可能性があります。</div>
      <div class="btn_wrap mt_40 mt_sp_30">
        <a href="<?php echo HOME; ?>" class="btn mx_auto">
          <span>トップへ戻る</span>
        </a>
      </div>
    </div>
  </section>

</main>

<?php get_footer();?>

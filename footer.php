<?php
/**
 * ┌─┐┬ ┬┌─┐┬ ┬┌┐┌┌─┐┌─┐┌┐┌┌─┐ ┌─┐┌─┐┌┬┐
 * └─┐├─┤├─┤││││││┌─┘├┤ ││││ ┬ │  │ ││││
 * └─┘┴ ┴┴ ┴└┴┘┘└┘└─┘└─┘┘└┘└─┘o└─┘└─┘┴ ┴
 *
 * @package WordPress
 * @Theme Memory
 *
 * @author admin@shawnzeng.com
 * @link https://shawnzeng.com
 */
?>
<div id="foot">
        版权所有 © <?php echo get_option( 'memory_copyright' ); ?> <a href="<?php echo get_option( 'siteurl' ); ?>"><?php bloginfo('name'); ?></a> |
        <a href="http://www.miitbeian.gov.cn"><?php echo get_option( 'memory_beian' ); ?></a> <br/> Theme <a href="https://shawnzeng.com/wordpress-theme-memory.html" target="_blank">Memory</a> By <a href="https://shawnzeng.com" target="_blank">Shawn</a> With <i class="fa fa-heart throb" style="color: #d43f57;"></i> | All Rights Reserved<br/> 
        <span class="my-face">(●'◡'●)ﾉ</span>
        本博客已萌萌哒运行了<span id="span_dt_dt"></span>
</div>
	<a href="javascript:void(0)" class="go-top">
        <i class="fa fa-rocket fa-2x fa-fw"></i>
    </a>
    <div class="toolbar">
        <div class="modetoolbar">
            <a href="javascript:void(0)" class="toolbarl-expand">
                <i class="fa fa-toggle-left fa-2x fa-fw"></i>
            </a>
            <a href="javascript:void(0)" title="" class="set-view-mode">
                <i class="fa fa-moon-o fa-2x fa-fw"></i>
            </a>
            <a href="javascript:void(0)" title="" class="set-font-mode">
                <i class="fa fa-font fa-2x fa-fw"></i>
            </a>
        </div>
    </div>
	<?php if ( current_user_can( 'manage_options' ) ) { ?> 
			<a href="/wp-admin" title="" class="fawpadmin">
                <i class="fa fa-user-secret fa-2x fa-fw"></i>
            </a>   	
	<?php }; ?>
    <footer>
		<link href="//cdn.bootcss.com/highlight.js/9.12.0/styles/atom-one-light.min.css" rel="stylesheet"> 
		<script src="//cdn.bootcss.com/highlight.js/9.12.0/highlight.min.js"></script>  
		<script>hljs.initHighlightingOnLoad();</script>  
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/js/jquery.share.min.js" charset="utf-8"></script>
      	<script>
            //------------------本博客已萌萌哒运行了……------------------
            function show_date_time() {
                window.setTimeout(function() {
                    show_date_time();
                }, 1000);
                var BirthDay = new Date("<?php echo get_option( 'memory_setuptime_month' ); ?>/<?php echo get_option( 'memory_setuptime_day' ); ?>/<?php echo get_option( 'memory_setuptime_year' ); ?> 00:00:00");
                var today = new Date();
                var timeold = (today.getTime() - BirthDay.getTime());
                var msPerDay = 24 * 60 * 60 * 1000;
                var e_daysold = timeold / msPerDay;
                var daysold = Math.floor(e_daysold);
                var e_hrsold = (e_daysold - daysold) * 24;
                var hrsold = Math.floor(e_hrsold);
                var e_minsold = (e_hrsold - hrsold) * 60;
                var minsold = Math.floor((e_hrsold - hrsold) * 60);
                var seconds = Math.floor((e_minsold - minsold) * 60);
                $('#span_dt_dt').html(daysold + "天" + hrsold + "小时" + minsold + "分" + seconds + "秒");
            }
            show_date_time();
        </script>
    </footer>
<?php wp_footer(); ?>
</body>

</html>
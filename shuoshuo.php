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
 * Template Name: 说说归档
 */
get_header();
setPostViews(get_the_ID());  
?>
	<div id="main">
        <div id="main-part">
			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
            <article class="art">
                <?php if ( has_post_thumbnail() ) { ?>			                      
			    	<div class="art-pic">
					<?php the_post_thumbnail(); ?>	
			        </div>									
				<?php } ?>
                <div class="art-main">
                    <h3 class="art-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="art-info">
                    	<span class="art-info-author">
                        	<i class="fa fa-user"></i>&nbsp;<?php the_author(); ?>
                        </span>&nbsp;•&nbsp;
                    	<span class="art-info-view">
                         	<i class="fa fa-eye"></i>&nbsp;<?php echo getPostViews(get_the_ID()); ?>
                      	</span>&nbsp;•&nbsp;
						<span class="art-info-comment">
                           	<i class="fa fa-commenting-o"></i>&nbsp;<?php comments_popup_link('0', '1', '%', '', '评论已关闭'); ?>
                      	</span>&nbsp;•&nbsp;
						<span class="post-like">
         					<a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>"><span class="count">
           					<?php if( get_post_meta($post->ID,'bigfa_ding',true) ){
                    			echo get_post_meta($post->ID,'bigfa_ding',true);
                 			} else {
                    			echo '0';
                 			}?></span>
        					</a>
 						</span>
						<span class="art-info-edit">
						<?php edit_post_link('编辑', '&nbsp;•&nbsp;&nbsp;', ''); ?>
						</span>
						<?php 
							if( current_user_can( 'manage_options') )
								if(d4v(get_permalink()) == 1) 
									$shoulu="•&nbsp;&nbsp;<span class='art-info-baidu'><i class='fa fa-paw'></i>&nbsp;已收录</span>"; 
								else 
									$shoulu="•&nbsp;&nbsp;<span class='art-info-baidu'><i class='fa fa-paw'></i>&nbsp;<a target='_blank' href='http://zhanzhang.baidu.com/sitesubmit/index?sitename=".get_permalink()."'>未收录!点此提交</a></span>";  
							echo $shoulu;
						?>
                  	</div>
                    <div class="art-content">
                        <?php the_content(); ?><?php memory_shuoshuo_list(); ?>
                    </div>
                    <span>分享至：</span><div class="social-share" data-sites="weibo,qq,qzone,wechat,tencent"></div>
                </div>
            </article>
			<?php endif; ?>
			<?php comments_template(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
<?php
/*
Template Name: ビジネス動画記事
Template Post Type: post,business-movie
*/

get_header();
setPostViews(get_the_ID());
 ?>
		<div id="fb-root"></div>
    	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2"></script>

		<section class="fv">
				<div>
					<p><span>広告運用・マーケティングの</span><br><span>メソッドがわかる</span></p>
			</div>
		</section><!--fv end-->
		<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div class="breadcrumbs">
			<ul itemscope itemtype="http://schema.org/BreadcrumbList">
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"><span itemprop="name">ホーム</span></a><meta itemprop="position" content="1" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/movie"><span itemprop="name">ビジネス動画</span></a><meta itemprop="position" content="2" /></li>
				<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="#"><span itemprop="name"><?php the_title(); ?></span></a><meta itemprop="position" content="3" /></li>
			</ul>
		</div>


		<div class="conts">
			<section class="article-wrap">
				<article class="inner1000">
					<p class="article-info"><time></time>
					<?php
					$tags = get_the_tags();
					if ( !empty( $tags ) ) {
						foreach ( $tags as $tag ) {
							echo '<span>' . $tag->name . '</span>';
						};
					}
					?></p>

					<h1><?php the_title(); ?></h1>
					<div class="main-txt">
					<?php the_content(); ?>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "BlogPosting",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo get_the_permalink(); ?>"
    },
    "headline": "<?php the_title(); ?>",
    "description": "マーケティングという言葉は現代社会で複雑化しています。現代ではデジタルマーケティングが中心かと思えば、展示会やカンファレンスといったイベントマーケティング（フィールドマーケティング）があったり、ダイレクトマーケテイングがあったりと様々な使われ方をします。このブログではマーケティングに関することをわかりやすく解説します。",
    "datePublished": "<?php the_date('Y-m-d'); ?>",
    "dateModified": "<?php the_modified_date('Y-m-d') ?>",
    "author": {
        "@type": "Person",
        "name": "安藤 弘樹（Koki Ando）"
    },
    "publisher": {
        "@type": "Organization",
       "name": "株式会社FREEDiVE",
        "url": "https://freedive.co.jp/",
        "logo": {
            "@type": "ImageObject",
            "url": "https://freedive.co.jp/wp-content/uploads/2020/02/FREEDIVE.png",
            "width": "308",
            "height": "285"
        },
        "address": {
            "@type": "PostalAddress",
            "postalCode": "1500001",
            "addressRegion": "東京都",
            "addressLocality": "渋谷区",
            "streetAddress": "神宮前3-42-2 VORT外苑前Ⅲ 5F"
        }
    },
    "image": {
        "@type": "ImageObject",
        "url": "<?php echo get_the_post_thumbnail_url( get_the_ID(), 'medium' ); ?>",
        "width": "300",
        "height":" 214"
    }
}
</script>
					</div>
					<!-- text end -->
					<ul class="share-btns">
						<?php echo  hatenaButton(get_the_permalink(),get_the_title()); ?>
						<?php echo  facebook(get_the_permalink(),get_the_title()); ?>
						<?php echo  twitter('@KOK1ANDO',get_the_permalink(),get_the_title()); ?>
					</ul>
					<a href="https://www.youtube.com/channel/UCXb4b0gBH90FAQ8cPIAPojA/" target="_blank" class="cv_youtube">
						<span>チャンネル登録する<span class="arrow-double"></span></span>
          </a>
				</article><!--inner end-->
			</section><!--cont end-->

		</div><!--conts end-->
		<?php endwhile;?>
		<?php endif; ?>
<?php
get_footer();

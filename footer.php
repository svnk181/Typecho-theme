<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
		<div class="container">
		<SPAN id=span_dt_dt></SPAN>
		<SCRIPT language=javascript>
			function show_date_time(){
			window.setTimeout("show_date_time()", 1000);
			BirthDay=new Date("12/13/2014 16:30:00");//这个日期是可以修改的
			today=new Date();
			timeold=(today.getTime()-BirthDay.getTime());
			sectimeold=timeold/1000
			secondsold=Math.floor(sectimeold);
			msPerDay=24*60*60*1000
			e_daysold=timeold/msPerDay
			daysold=Math.floor(e_daysold);
			e_hrsold=(e_daysold-daysold)*24;
			hrsold=Math.floor(e_hrsold);
			e_minsold=(e_hrsold-hrsold)*60;
			minsold=Math.floor((e_hrsold-hrsold)*60);
			seconds=Math.floor((e_minsold-minsold)*60);
			span_dt_dt.innerHTML="博客已运行"+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
			}
			show_date_time();
		</SCRIPT>

</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>

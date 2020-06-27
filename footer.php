<?php if( session_id()=='' ) { exit(0); } ?>

			<footer class="footer">
				<div class="container">
					<div class="row row-lg-eq-height">
						<div class="col-lg-9 order-lg-1 order-2">
							<div class="footer_content">
								<div class="footer_logo"><a href="index.php">DREAMS FOR TOMORROW</a></div>
								<div class="footer_social">
									<ul>
										<li class="footer_social_facebook"><a href="https://www.facebook.com/DreamsForTomorrowBangladesh/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
										<li class="footer_social_twitter"><a href="https://twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
										<li class="footer_social_pinterest"><a href="https://www.pinterest.com/"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
										<li class="footer_social_instagram"><a href="https://www.instagram.com/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
										<li class="footer_social_google"><a href="https://www.google.com/"><i class="fab fa-google" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="copyright">
									ALL RIGHTS RESERVED BY DREAMS FOR TOMORROW | DEVELOPED BY <a href="https://www.facebook.com/NishanPauL007MLF" target="_blank">NISHAN PAUL</a> &copy; <script>document.write(new Date().getFullYear());</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<script src="plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="plugins/masonry/masonry.js"></script>
		<script src="plugins/masonry/images_loaded.js"></script>
		<script src="plugins/parallax-js-master/parallax.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/contact.js"></script>
		<script src="js/post.js"></script>
		<script src="ckeditor5/build/ckeditor.js"></script>
		<script src="https://kit.fontawesome.com/7eef3ad90e.js" crossorigin="anonymous"></script>

		<script>
			function logout() {
                $.ajax(
                    {
                        url: 'index.php',
                        type: 'POST',
                        data: {action:'logout'},
                        success: function(data) { window.location = 'index.php'; }
                    }
                );
            }

			function create_link_class(block) { window.location = "dashboard_post.php?query=class&value=" + block.value; }
			
			function create_link_class_article(block) { window.location = "article.php?query=class&value=" + block.value; }

			function create_link_class_video(block) { window.location = "video.php?query=class&value=" + block.value; }

			function create_link_category(block) { window.location = "dashboard_post.php?query=tag&value=" + block.value; }
			
			function create_link_category_article(block) { window.location = "article.php?query=tag&value=" + block.value; }

			function create_link_category_video(block) { window.location = "video.php?query=tag&value=" + block.value; }

			function create_link_post(block) { window.location = "dashboard_post.php?query=state&value=" + block.value; }

			function create_link_comment(block) { window.location = "dashboard_post.php?query=link_comment&value=" + block.value; }
			
			function create_link_role(block) { window.location = "dashboard_user.php?query=role&value=" + block.value; }
			
			function create_link_state(block) { window.location = "dashboard_user.php?query=state&value=" + block.value; }

			ClassicEditor.create( document.querySelector( '#content' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );

			ClassicEditor.create( document.querySelector( '#link' ), {
				toolbar: { items: ['mediaEmbed', '|','undo', 'redo'] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );

			ClassicEditor.create( document.querySelector( '#content_comment' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );

			ClassicEditor.create( document.querySelector( '#content_about' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );

			ClassicEditor.create( document.querySelector( '#bio' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );

			ClassicEditor.create( document.querySelector( '#education' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );
		
			ClassicEditor.create( document.querySelector( '#profession' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );
		
			ClassicEditor.create( document.querySelector( '#address' ), {
				toolbar: { items: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote', 'bulletedList', 'numberedList', '|', 'horizontalLine', 'underline', 'insertTable', 'mediaEmbed', '|', 'superscript', 'subscript', '|', 'undo', 'redo' ] },
				language: 'en',
				image: { toolbar: ['imageTextAlternative', 'imageStyle:full', 'imageStyle:side'] },
				table: { contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells'] },
				licenseKey: '',
			} )
			.then( editor => { window.editor = editor; } )
			.catch( error => { console.error( error ); } );
		</script>
	</body>
</html>

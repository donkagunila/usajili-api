<footer class="footer">
	<div class="row">
		<div class="col-md-12">
			<div>
				<p class="text-white">
					{{ Illuminate\Mail\Markdown::parse($slot) }}
				</p>
			</div>
		</div>
	</div>
</footer>

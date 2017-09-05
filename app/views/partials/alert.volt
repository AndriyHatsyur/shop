{% if alert is defined %}
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content btn-radius">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"> </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        {{alert}}
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary btn-radius" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
{% endif %}	
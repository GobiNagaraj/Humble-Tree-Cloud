            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        {{ date('Y') }} &copy;</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header bg-primary">
    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</body>
<script src="{{ asset('backend/assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/ready.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/demo.js') }}"></script>
{{-- custom js include --}}
<script src="{{ asset('backend/assets/js/custom.js') }}"></script>
</html>

@if (count($bookings) > 0)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $booking->user_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('prescription') }}" method="post">@csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rédiger l'Ordonnance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="app">

                        <input type="hidden" name="user_id" value="{{ $booking->user_id }}">
                        <input type="hidden" name="doctor_id" value="{{ $booking->doctor_id }}">
                        <input type="hidden" name="date" value="{{ $booking->date }}">

                        <div class="form-group">
                            <label>Maladie</label>
                            <input type="text" name="name_of_disease" class="form-control"
                                placeholder="Veuillez saisir la maladie du Patient" required="">
                        </div>
                        <div class="form-group">
                            <label>Les symptômes</label>

                            <textarea name="symptoms" class="form-control" placeholder="Veuillez saisir les symptômes" required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label>Médicaments</label>
                            <add-btn></add-btn>

                        </div>
                        <div class="form-group">
                            <label>Procédure d'utilisation des médicaments</label>
                            <textarea name="procedure_to_use_medicine" class="form-control"
                                placeholder="Veuillez saisir la Procédure d'utilisation des médicaments" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Feedback</label>
                            <textarea name="feedback" class="form-control" placeholder="Veuillez saisir votre Feedback" required=""></textarea>


                        </div>
                        <div class="form-group">
                            <label>Signature</label>
                            <input type="text" name="signature" class="form-control"
                                placeholder="Veuillez saisir votre Signature" required="">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="ik ik-close"></i>
                            Fermer</button>
                        <button type="submit" class="btn btn-primary"><i class="ik ik-save"></i> Sauvegarder les
                            modifications</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif

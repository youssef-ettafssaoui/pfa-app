       <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog"
           aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Informations sur le Médecin :</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <center>
                           <img src="{{ asset('images') }}/{{ $user->image }}" alt="" width="200"
                               class="img-circle"></a>
                           <h3 class="media-heading">{{ $user->name }}</h3>
                           <div class="form-group">
                               <p style="font-size: 14px" class="badge badge-primary">Spécialité
                                   :
                                   {{ $user->department }}
                               </p>
                               <p style="font-size: 14px" class="badge badge-primary">Role :
                                   {{ $user->role->name }}</p>

                               <p style="font-size: 14px" class="badge badge-primary">Adresse Email :
                                   {{ $user->email }}
                               </p>
                               <p style="font-size: 14px" class="badge badge-primary">
                                   Adresse de Résidence : {{ $user->address }}</p>
                               <p style="font-size: 14px" class="badge badge-primary">Numéro de Contact :
                                   {{ $user->phone_number }}</p>

                               <p style="font-size: 14px" class="badge badge-primary">Sexe :
                                   {{ $user->gender }}</p>
                               <p style="font-size: 14px" class="badge badge-primary">Education :
                                   {{ $user->education }}</p>
                           </div>

                       </center>
                       <hr>
                       <center>
                           <p class="text-left">
                               <strong class="text text-primary">Bref Description : </strong><br>
                               {{ $user->description }}
                           </p>
                           <br>
                       </center>
                   </div>
                   <div class="modal-footer">
                       <button type="button" class="btn btn-warning" data-dismiss="modal">j'en ai assez entendu parler
                           de {{ $user->name }}</button>

                   </div>
               </div>
           </div>
       </div>

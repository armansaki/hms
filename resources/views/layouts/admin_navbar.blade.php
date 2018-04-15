<li class="dropdown {{Request::is('#') ? "active" : "" }}">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                 Doctor
                             </a>

                             <ul class="dropdown-menu">

                                 <li>
                                    <a href="">
                                      All Doctors
                                     </a>
                                 </li>
			     <li>
                                    <a href="{{route('adddoctorform')}}">
                                      Add new doctor
                                     </a>
                                 </li>
			                   </ul>
</li>


                             <div class="form-group{{ $errors->has('application_football_team_ids') ? ' has-error' : '' }}">
                                 <label class="col-md-4 control-label  ">  @lang('football_team_id')  </label>
                            <div class="col-md-6  ">

                             <ul class="list-unstyled mb-0">
                                    
                                            <li class="d-inline-block mr-2">
                                            
                                                <fieldset>
                                                 <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox"   name="application_football_team_ids[]" id="select_all"  value="0">
                                                        <span class="vs-checkbox vs-checkbox-lg" >
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">{{ __('All') }}</span>
                                                    </div>
                                                    
                                                 @foreach($application_football_teams as $key =>  $application_football_team)
                                                     

                                                    <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox"  class="checkbox" name="application_football_team_ids[]"  value="{{ $application_football_team->football_team_id }}">
                                                        <span class="vs-checkbox vs-checkbox-lg" >
                                                            <span class="vs-checkbox--check">
                                                                <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">{{ $application_football_team->name }}</span>
                                                    </div>
               
                                                 @endforeach
                                                     
                                                </fieldset>
                                               
                                            </li>
                                        </ul>

                                @if ($errors->has('application_football_team_ids'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('application_football_team_ids') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



   
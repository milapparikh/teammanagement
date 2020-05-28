                        <div class="location-step" data-step="3">
                          <div class="location-step-element">
                            <div class="title">Country</div>
                            <div class="selection">
                              <select data-placeholder="Several Options" id="country">
                              <option value=""></option>
                                @if($country->count() > 0)
                                  @foreach($country as $oCountry)
                                     <option value="{{ $oCountry->id }}">{{ $oCountry->country_name }}</option>
                                  @endforeach
                                @endif
                              </select>
                            </div>
                          </div>

                          <div class="location-step-element">
                            <div class="title">City</div>
                            <div class="selection">
                               <select name="city" id="city" class="form-control">
                              </select>

                              <!--
                              <select data-placeholder="Several Options" id="city">
                                <option value=""></option>
                                @if($city->count() > 0)
                                  @foreach($city as $ocity)
                                     <option value="{{ $ocity->id }}">{{ $ocity->city_name }}</option>
                                  @endforeach
                                @endif                               
                              </select>
                            -->
                            </div>
                          </div>

                          <div class="location-step-element">
                            <div class="title">Postal Code</div>
                            <div class="selection">
                              <select data-placeholder="Several Options">
                                <option value=""></option>
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                                <option value="option4">Option 4</option>
                                <option value="option5">Option 5</option>
                                <option value="option6">Option 6</option>
                                <option value="option7">Option 7</option>
                                <option value="option8">Option 8</option>
                                <option value="option9">Option 9</option>
                                <option value="option10">Option 10</option>
                                <option value="option11">Option 11</option>
                                <option value="option12">Option 12</option>
                              </select>
                            </div>
                          </div>
                        </div>
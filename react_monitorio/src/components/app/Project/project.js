import React from 'react';

function AppProjct() {
    
    return (


<div className="header-s">  

  <div className="all-wrapper with-side-panel solid-bg-all">
    
   
       
     
      
     
      
          <div className="content-box"><div className="row">
              <div className="col-sm-5">
                
               
              </div>
              <div className="col-sm-10">
                <div className="element-wrapper">
                  <div className="element-box">
                    <form id="formValidate">
                      <div className="element-info">
                        <div className="element-info-with-icon">
                          <div className="element-info-icon">
                            <div className="os-icon os-icon-user-plus" />
                          </div>
                          <div className="element-info-text">
                            <h5 className="element-inner-header">
                              Add Project
                            </h5>
                            
                          </div>
                        </div>
                      </div>
                      <fieldset className="form-group">
                        <legend><span>Section Project Data</span></legend>
                        <div className="row">
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Project Acronym</label><input className="form-control" data-error="Please input Project Acronym" placeholder="Project Acronym" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Project Title</label><input className="form-control" data-error="Please input Project Title" placeholder="Project Title" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          </div>

                          
                          <div className="row">
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>General Objective</label><input className="form-control" data-error="Please input General Objective" placeholder="General Objective" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Budget</label><input className="form-control" data-error="Please input budget" placeholder="Budget" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                        </div>
                       
                        <div className="row">
                          <div className="col-sm-4">
                            <div className="form-group">
                              <label htmlFor>Start Date</label><input className="form-control" data-error="Please input start date" placeholder="" required="required" type="date" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>

                          <div className="col-sm-4">
                            <div className="form-group">
                              <label htmlFor>End Date</label><input className="form-control" data-error="Please input end date" placeholder="" required="required" type="date" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-4">
                          <div className="form-group">
                        <label htmlFor> Status</label><select className="form-control">
                          <option value="tunis">
                            tunus
                          </option>
                         
                        </select>
                      </div>
                     </div>
                          
                        </div>
                        
                        <div className="row">
                         

                          <div className="col-sm-4">
                            <div className="form-group">
                              <label htmlFor>Coordinates Latitude</label><input className="form-control" data-error="Please input Coordinates Latitude" placeholder="Coordinates Latitude" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-4">
                            <div className="form-group">
                              <label htmlFor>Coordinates Longitude</label><input className="form-control" data-error="Please input Coordinates Longitude" placeholder="Coordinates Longitude" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-4">
                            <div className="form-group">
                              <label htmlFor>Main Contact</label><input className="form-control" data-error="Please input Main Contact" placeholder="Main Contact" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                        </div>
                        

                        <div className="row">
                          <div className="col-sm-4">
                          <div className="form-group">
                        <label htmlFor> Program</label><select className="form-control">
                          <option value="tunis">
                            project
                          </option>
                         
                        </select>
                      </div>
                     </div>
                     <div className="col-sm-4">
                         <label>Photo</label>
                    <div className="custom-file">
                        <input type="file" className="custom-file-input" id="customFile" />
                        <label className="custom-file-label" htmlFor="customFile">Choose file</label>
                        </div>
                  </div>
                     <div className="col-sm-4">
                         <label> </label>
                     <div className="form-check">
                        <label className="form-check-label"><input className="form-check-input" type="checkbox" />Project as a program</label>
                      </div>
                      </div>
                     </div>
                     <div className="row">
                         

                        
                    <div className="form-check form-check-inline">
                      <input className="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" defaultValue="option1" />
                     <label className="form-check-label" htmlFor="inlineRadio1">Countries</label>
                       </div>
                   <div className="form-check form-check-inline">
                   <input className="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" defaultValue="option2" />
                        <label className="form-check-label" htmlFor="inlineRadio2">Departement</label>
                    </div>
                    </div>
                    

                      </fieldset>
                    
                   
                      
                     
                      
                      <div className="form-check">
                        <label className="form-check-label"><input className="form-check-input" type="checkbox" />I agree to terms and conditions</label>
                      </div>
                      <div className="form-buttons-w">
                        <button className="btn btn-primary" type="submit"> Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
   
    
    <div className="display-type" />
 </div>

  );
}

export default AppProjct;
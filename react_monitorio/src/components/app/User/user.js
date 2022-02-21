function AppUser() {
    
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
                              Add user
                            </h5>
                            
                          </div>
                        </div>
                      </div>
                      <fieldset className="form-group">
                        <legend><span>Section user</span></legend>
                        <div className="row">
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor> First Name</label><input className="form-control" data-error="Please input your First Name" placeholder="First Name" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Last Name</label><input className="form-control" data-error="Please input your Last Name" placeholder="Last Name" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                        </div>
                        <div className="row">
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor> Date of Birth</label><input className="single-daterange form-control" placeholder="Date of birth" type="text" defaultValue="04/12/1978" />
                            </div>
                          </div>
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Twitter Username</label>
                              <div className="input-group">
                                <div className="input-group-prepend">
                                  <div className="input-group-text">
                                    @
                                  </div>
                                </div>
                                <input className="form-control" placeholder="Twitter Username" type="text" />
                              </div>
                            </div>
                          </div>
                        </div>
                        
                    
                      </fieldset>
                      <div className="form-group">
                        <label htmlFor> Regular select</label><select className="form-control">
                          <option value="New York">
                            New York
                          </option>
                          <option value="California">
                            California
                          </option>
                          <option value="Boston">
                            Boston
                          </option>
                          <option value="Texas">
                            Texas
                          </option>
                          <option value="Colorado">
                            Colorado
                          </option>
                        </select>
                      </div>
                      <div className="form-group">
                        <label htmlFor> Email address</label><input className="form-control" data-error="Your email address is invalid" placeholder="Enter email" required="required" type="email" />
                        <div className="help-block form-text with-errors form-control-feedback" />
                      </div>
                      <div className="row">
                        <div className="col-sm-6">
                          <div className="form-group">
                            <label htmlFor> Password</label><input className="form-control" data-minlength={6} placeholder="Password" required="required" type="password" />
                            <div className="help-block form-text text-muted form-control-feedback">
                              Minimum of 6 characters
                            </div>
                          </div>
                        </div>
                        <div className="col-sm-6">
                          <div className="form-group">
                            <label htmlFor>Confirm Password</label><input className="form-control" data-match-error="Passwords don't match" placeholder="Confirm Password" required="required" type="password" />
                            <div className="help-block form-text with-errors form-control-feedback" />
                          </div>
                        </div>
                      </div>
                      
                      <div className="form-group">
                        
                      </div>
                      
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

export default AppUser;
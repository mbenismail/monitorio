

import React from 'react';

function RegisterComponent() {
    return (
      
<div className="all-wrapper menu-side with-pattern">
      <div className="auth-box-w wider">
        <div className="logo-w">
          <a href="index.html"><img alt="" src="assets/img/logo-big.png"/></a>
        </div>
        <h4 className="auth-header">
          Create new account
        </h4>
        <form action="">
          <div className="form-group">
            <label for=""> Email address</label><input className="form-control" placeholder="Enter email" type="email"/>
            <div className="pre-icon os-icon os-icon-email-2-at2"></div>
          </div>
          <div className="row">
            <div className="col-sm-6">
              <div className="form-group">
                <label for=""> Password</label><input className="form-control" placeholder="Password" type="password"/>
                <div className="pre-icon os-icon os-icon-fingerprint"></div>
              </div>
            </div>
            <div className="col-sm-6">
              <div className="form-group">
                <label for="">Confirm Password</label><input className="form-control" placeholder="Password" type="password"/>
              </div>
            </div>
          </div>
          <div className="buttons-w">
            <button className="btn btn-primary">Register Now</button>
          </div>
        </form>
      </div>
    </div>
         
          
    );
  }
  
  export default RegisterComponent;
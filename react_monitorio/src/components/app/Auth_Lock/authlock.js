import React from 'react';

function loginComponent() {
    return (
      
        <div className="all-wrapper menu-side with-pattern">
      <div className="auth-box-w wider centered">
        <div className="logo-w">
          <a href="index.html"><img alt="" src="img/logo-big.png"/></a>
        </div>
        <h5 className="auth-header">
          Welcome Back
        </h5>
        <div className="logged-user-w">
          <div className="avatar-w">
            <img alt="" src="assets/img/avatar1.jpg"/>
          </div>
          <div className="logged-user-name">
            Maria Gomez
          </div>
          <div className="logged-user-role">
            Administrator
          </div>
        </div>
        <form action="">
          <div className="form-group">
            <label for="">Enter your password to access admin</label><input className="form-control" placeholder="Enter your password" type="password"/>
            <div className="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div className="buttons-w">
            <button className="btn btn-primary">Log me in</button><a className="btn btn-link" href="/auth/login.html">Login as different user</a>
          </div>
        </form>
      </div>
    </div>
         
          
    );
  }
  
  export default loginComponent;
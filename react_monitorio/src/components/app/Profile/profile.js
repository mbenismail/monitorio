import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';
import axios from 'axios';

function AppProfil() {
  
  const [NomProfil,setNomProfil] = useState('');
  const [ProfilDesc,setProfilDesc] = useState('');
  const [ProfilSys,setProfilSys] = useState('');
  const [message, setMessage] = useState("");

  let handleSubmit = async (e) => {
    e.preventDefault();
    try {
  let res = await fetch("http://localhost:8000/api/profil/new", {
  method: "POST",
  body: JSON.stringify({
    NomProfil: NomProfil,
    ProfilDesc: ProfilDesc,
    ProfilSys: ProfilSys,
  }),
});
let resJson = await res.json();
if (res.status === 200) {
  setNomProfil("");
  setProfilDesc("");
  setProfilSys("");
  setMessage("User created successfully");
} else {
  setMessage("Some error occured");
}
} catch (err) {
console.log(err);
}
};
render()
{
  return (


<div className="header-s">  
  <div className="all-wrapper with-side-panel solid-bg-all">
    
    <div className="layout-w">
          <div className="content-w">    
        <div className="content-w">
          <div className="content-box"><div className="row">
              <div className="col-sm-5">
              </div>
              <div className="col-sm-10">
                <div className="element-wrapper">
                  <div className="element-box">
                    <form id="formValidate" onSubmit={handleSubmit}>
                      <div className="element-info">
                        <div className="element-info-with-icon">
                          <div className="element-info-icon">
                            <div className="os-icon os-icon-user-plus" />
                          </div>
                          <div className="element-info-text">
                            <h5 className="element-inner-header">
                              Add Profile
                            </h5>
                            
                          </div>
                        </div>
                      </div>
                      <fieldset className="form-group">
                        <legend><span>Section Profile</span></legend>
                        <div className="row">
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor> Profile</label>
                              <input className="form-control" value={NomProfil}
                               onChange={(e) => setNomProfil(e.target.value)}
                              data-error="Please input your First Name" placeholder="Profile" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-6">
                            <div className="form-group">
                              <label htmlFor>Description</label> 
                              <input className="form-control" value={ProfilDesc}
                               onChange={(e) => setProfilDesc(e.target.value)}
                              data-error="Please input Profile description" placeholder="Description"  type="textarea" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div className="form-group">
                       
                      </div>
                  
                      
                      <div className="form-group">
                        
                      </div>
                      <div className="form-check">
                        <label className="form-check-label"><input value={ProfilSys}
                        onChange={(e) => setProfilSys(e.target.value)}
                        className="form-check-input" type="checkbox" /> System Profile</label>
                      </div>
                     
                      <div className="form-buttons-w">
                        <button 
                        className="btn btn-primary" type="submit"> Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
    <div className="display-type" />
  </div>
</div>
  );
}}

export default AppProfil;
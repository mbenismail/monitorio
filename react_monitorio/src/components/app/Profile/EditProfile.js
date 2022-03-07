import { render } from "@testing-library/react";
import React ,{useState,useEffect,useRef, useContext} from 'react';

function AppProfil() {
  const [Profile, setProfile] = useState([])
  const [NomProfil, setNomProfil] = useState("");
  const [ProfilDesc, setProfilDesc] = useState("");
  const [ProfilSys, setProfilSys] = useState(false);
  const [ProfilId,setProfilId]=useState(null)
  const requestOptions = {
    method: 'PUT',
    headers: { 
        'Content-Type': 'application/json',
        
    },
    body: JSON.stringify({ 
      ProfilId:ProfilId,
      NomProfil: NomProfil,
      ProfilDesc: ProfilDesc,
      ProfilSys:ProfilSys
     })
};
const updateprofile= (e) => {
  // update entity - PUT
  e.preventDefault();{


fetch('http://localhost:8000/api/profile/edit/'+ProfilId, requestOptions)
.then(response => response.json())
.then(response => { console.log(response);
})}

  }
  useEffect(() => {
      // PUT request using fetch with set headers
      updateprofile()
  }, []);

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
                    <form id="formValidate" >
                      <div className="element-info">
                        <div className="element-info-with-icon">
                          <div className="element-info-icon">
                            <div className="os-icon os-icon-user-plus" />
                          </div>
                          <div className="element-info-text">
                            <h5 className="element-inner-header">
                              Edit Profile
                            </h5>
                            
                          </div>
                        </div>
                      </div>
                      <fieldset className="form-group">
                        <legend><span>Section Profile</span></legend>
                        <div className="row">
                          <div className="col-sm-5">
                            <div className="form-group">
                              <label htmlFor> Profile</label>
                              <input className="form-control"     onChange={(e) => setNomProfil(e.target.value )}
                              data-error="Please input your First Name" placeholder="Profile" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-5">
                            <div className="form-group">
                              <label htmlFor>Description</label> 
                              <input className="form-control"  onChange={(e)=> setProfilDesc(e.target.value)}
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
                        <label className="form-check-label"><input  onChange={(e)=> setProfilSys(e.target.checked)}
                        className="form-check-input" type="checkbox" /> System Profile</label>
                      </div>
                     
                      <div className="form-buttons-w">
                      <button className="btn btn-sm btn-primary" onClick={(e) => this.create(e)}>Update Data</button>
                  <button className="btn btn-sm btn-warning ml-2" >Clear</button>
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
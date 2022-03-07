import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';

function AppProfil() {
  const url ="http://localhost:8000/api/profile/new"
  const [NomProfil,setNomProfil] = useState('');
  const [ProfilDesc,setProfilDesc] = useState('');
  const [ProfilSys,setProfilSys] = useState(false);
  const [message, setMessage] = useState("");
  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
      // console.log(JSON.stringify({
      //   NomProfil: NomProfil,
      //   ProfilDesc: ProfilDesc,
      // }))
  let res =  await fetch(url, {
  method: "POST",
  headers: {'Content-Type': 'application/json' },
  body: JSON.stringify({
    NomProfil: NomProfil,
    ProfilDesc: ProfilDesc,
    ProfilSys:ProfilSys
  }),
});
let resJson = await res.json();
console.log(resJson)
if (resJson.status === 200) {
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
                          <div className="col-sm-5">
                            <div className="form-group">
                              <label htmlFor> Profile</label>
                              <input className="form-control" value={NomProfil}
                               onChange={(e) => setNomProfil(e.target.value)}
                              data-error="Please input your First Name" placeholder="Profile" required="required" type="text" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-5">
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
                        onChange={(e) => setProfilSys(!ProfilSys)}
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
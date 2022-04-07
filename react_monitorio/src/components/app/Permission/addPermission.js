import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';
import { useHistory } from "react-router-dom";

function AppPermission() {
  const url ="http://localhost:8000/api/permission/new"
  const [CodePerm,setCodePerm] = useState('');
  const [DescPerm,setDescPerm] = useState('');
  const [supadmiPerm,setsupadmiPerm] = useState(false);
  const [Defaut,setDefaut] = useState(false);

  // const [ProfilSys,setProfilSys] = useState(false);
  const [message, setMessage] = useState("");
  const [Profile, setProfile] = useState([]); 

  const fetchData = async () => {
    const response = await fetch("http://localhost:8000/api/profile/index")
    const data = await response.json()
      // console.log(data)
      setProfile(data)
    }
    
    useEffect(() => {
      fetchData()
    
    }, [])

  const handleSubmit = async (e) => {
    e.preventDefault();
    try {
     
  let res =  await fetch(url, {
  method: "POST",
  headers: {'Content-Type': 'application/json' },
  body: JSON.stringify({
    CodePerm: CodePerm,
    DescPerm: DescPerm,
    supadmiPerm: supadmiPerm,
    Defaut: Defaut,
    // ProfilSys:ProfilSys
  }),
});
let resJson = await res.json();
console.log(resJson)
if (resJson.status === 200) {

  setCodePerm("");
  setDescPerm("");
  setsupadmiPerm("");
  setDefaut("");
  console.log(JSON.stringify({
    CodePerm: CodePerm,
    DescPerm: DescPerm,
    supadmiPerm:supadmiPerm,
    Defaut:Defaut
  }))
 // setProfilSys("");
  setMessage("Permission created successfully");
  window.location = "";
} else {
  setMessage("Some error occured");
}
} catch (err) {
console.log(err);
}
};
let history = useHistory();

render()
{
  return (


<div className="header-s">  
  <div className="all-wrapper with-side-panel solid-bg-all">
    
 <div className="col-sm-10">
  <div className="element-wrapper">
    <div className="element-box">
      <form id="formValidate" onSubmit={handleSubmit}>
      <legend><span>Add Permission </span></legend>
        
        <div className="row">
          <div className="col-sm-4">
        <div className="form-group">
          <label htmlFor> Code permission </label><input className="form-control" data-error="Your code permission  is invalid" placeholder="Enter code permission" required="required" type="text" value={CodePerm}
                               onChange={(e) => setCodePerm(e.target.value)} />
          <div className="help-block form-text with-errors form-control-feedback" />
        </div>
        
        </div>
        <div className="col-sm-4">
        <div className="form-group">
          <label htmlFor> Description</label><input  value={DescPerm}
          onChange={(e) => setDescPerm(e.target.value)}className="form-control" data-error="Your Description is invalid" placeholder="Enter Description" required="required" type="text" />
          <div className="help-block form-text with-errors form-control-feedback" />
        </div>
        </div>        
        </div>
        <div className="row">
          <div className="col-sm-4">
            <div className="form-check">
          <label className="form-check-label"><input value={supadmiPerm}
                        onChange={(e) => setsupadmiPerm(!supadmiPerm)}
          className="form-check-input" type="checkbox" />Super Admin</label>
                     
            </div>
          </div>
          <div className="col-sm-4">
          <div className="form-check">
          <label className="form-check-label"><input value={Defaut}
                        onChange={(e) => setDefaut(!Defaut)}
          className="form-check-input" type="checkbox" /> By default</label>
                     
            </div></div>
        </div> 
        
     
        <fieldset className="form-group">
          <legend><span>Add permission to profile</span></legend>
          <div className="row">
          <div className="col-sm-4">

          <div className="form-group">
          <label htmlFor> Profile</label>
          <select className="form-control">
          { Profile.map((profil) => {
       return(
            <option value="New York">
        {profil.NomProfil}
            </option>
               )})}
          </select>
        </div>
        </div>
        </div>
          {/* <div className="row">
            <div className="col-sm-4">
              <div className="form-group">
                <label htmlFor> First Name</label><input className="form-control" data-error="Please input your First Name" placeholder="First Name" required="required" type="text" />
                <div className="help-block form-text with-errors form-control-feedback" />
              </div>
            </div>
            <div className="col-sm-4">
              <div className="form-group">
                <label htmlFor>Last Name</label><input className="form-control" data-error="Please input your Last Name" placeholder="Last Name" required="required" type="text" />
                <div className="help-block form-text with-errors form-control-feedback" />
              </div>
            </div>
          </div>
          <div className="row">
            <div className="col-sm-4">
              <div className="form-group">
                <label htmlFor> Date of Birth</label><input className="single-daterange form-control" placeholder="Date of birth" type="text" defaultValue="04/12/1978" />
              </div>
            </div>
            <div className="col-sm-4">
              <div className="form-group">
                <label htmlFor>Twitter Username</label>
                <div className="input-group">
                  <div className="input-group-prepend">
                    <div className="input-group-text">                      
                    </div>
                  </div>
                  <input className="form-control" placeholder="Twitter Username" type="text" />
                </div>
              </div>
            </div>
          </div> */}
        
        </fieldset>
       
        <div className="form-buttons-w">
          <button className="btn btn-primary" type="submit"> Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div className="display-type" />
  </div>
</div>
  );
}}

export default AppPermission;
import { render } from "@testing-library/react";
import React ,{useState,useEffect,useRef, useContext} from 'react';
import { useHistory, useParams } from "react-router-dom";


function AppProfil() {
  const [Profile, setProfile] = useState({ NomProfil: "", ProfilDesc: "", ProfilSys: ""})
  const [Permission,setPermission] = useState([]);
const { id } = useParams();
let history = useHistory();
const { NomProfil, ProfilDesc, ProfilSys} = Profile;
const onInputChange = e => {
setProfile({ ...Profile, [e.target.name]: e.target.value });
};
const loadProfile = async () => {
  const response = await fetch(`http://localhost:8000/api/profile/show/`+id)
  const data = await response.json()
  setProfile(data);

// console.log(data)
}
const onSubmit = async e => {
  e.preventDefault()
  const requestOptions = {
      method: 'PUT',
      headers: { 'Content-Type': 'application/json' },
     body:  JSON.stringify(Profile),
  };
  const response = await fetch(`http://localhost:8000/api/profile/edit/`+id, requestOptions);
  const data = await response.json();
  history.push("/ListProfiles");
  console.log(data)
}

const fetchData = async () => {
  const response = await fetch("http://localhost:8000/api/permission/index")
  const data = await response.json()
  setPermission(data)
}
  useEffect(() => {
    fetchData();
    loadProfile();
  }, []);

  async function deletePermission(id) {
  
    
       let result= await fetch('http://localhost:8000/api/permission/delete/'+id ,{
         method:'DELETE',
         headers: {"Content-Type":"application/json"}
     });
   
     console.log(result)
     result= await result.json();
     setProfile((Permission.filter(permission => permission.id !== id)));
     //window.location.reload(false);
     console.log(result)
     console.warn(result)
     }
    

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
                    <form id="formValidate"  onSubmit={e => onSubmit(e)} >
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
                              <input className="form-control" value={NomProfil} onChange={e => onInputChange(e)}
                              data-error="Please input Profile Name" 
                          
                              placeholder="Profile" required="required" type="text" 
                              name="NomProfil"
                              />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                          <div className="col-sm-5">
                            <div className="form-group">
                              <label htmlFor>Description</label> 
                              <input className="form-control"   value={ProfilDesc} onChange={e => onInputChange(e)}
                              data-error="Please input Profile description" 
                              name="ProfilDesc"

                              placeholder="Description"  type="textarea" />
                              <div className="help-block form-text with-errors form-control-feedback" />
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div className="form-group">
                       
                      </div>
                      <div className="form-group">
                        
                        </div>
                        <div className="col-sm-4">
                        <div className="form-check">
                          <label className="form-check-label"><input name="ProfilSys"
                           Defaultchecked={ProfilSys}
                           onChange={e => onInputChange(e)}
                           className="form-check-input" type="checkbox" /> System Profile</label>
                        </div>
                        </div>
        <div className="form-buttons-w">
          <button className="btn btn-primary" type="submit"> Update Data</button>
        </div>
      </form>
      <form id="formValidate" >
                      <fieldset className="form-group">
          <legend><span>Add permission to profile</span></legend>
          <div className="row">
          <div className="col-sm-3">

          <div className="form-group">
          <label htmlFor> Permission</label>
         
          <select className="form-control">
          { Permission.map((perm) => {
       return(
            <option value="New York">
        {perm.CodePerm}
            </option>
               )})}
          </select>
       
        </div>

        </div>
        <div className="col-sm-4">
        <div className="form-group">
        <label htmlFor>Add Selected Permission  </label> 
            <button className="btn btn-primary" type="submit">Add Selected Permission  </button> </div>   </div>
            <div className="col-sm-3">
        <div className="form-group">
        <label htmlForA > Add all Permissions </label> 
            <button className="btn btn-primary" type="submit"> Add all Permissions </button> </div>   </div>  
                  </div></fieldset>

        </form>
        <form id="formValidate" >
      

        <fieldset className="form-group">
        <div className="element-box">
  <legend><span>List of Permission</span></legend>

    

  <table id="editableTable" className="table table-editable table-striped table-lightfont">
  <thead><tr><th>Description</th><th>Actions</th></tr></thead>
  <tbody>
  { Permission.map((permission)=>{

return(

  <tr key={permission.id}>
  <td>{permission.CodePerm}</td>
<td className="row-actions">
            <a href="#"><i className="os-icon os-icon-ui-49" 
        /></a><a className="danger" href="#" onClick={()=>deletePermission(permission.id)}>
                <i className="os-icon os-icon-ui-15" /></a>
          </td>
 
 
  </tr>
)})}

  
  </tbody></table>
</div>

</fieldset>
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
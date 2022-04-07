
import { render } from "@testing-library/react";
import React ,{useState,useEffect} from 'react';
import { useHistory } from "react-router-dom";
function AppListProfil() {
  const [Profile, setProfile] = useState([]); 
 async function deleteProfile(id) {
  

   
    let result= await fetch('http://localhost:8000/api/profile/delete/'+id ,{
      method:'DELETE',
      headers: {"Content-Type":"application/json"}
  });

  console.log(result)
  result= await result.json();
  setProfile((Profile.filter(profil => profil.id !== id)));
  //window.location.reload(false);
  console.log(result)
  console.warn(result)
  
 }
const fetchData = async () => {
const response = await fetch("http://localhost:8000/api/profile/index")
const data = await response.json()
  // console.log(data)
  setProfile(data)
}

useEffect(() => {
  fetchData()

}, [])

let history = useHistory();


    render()
{
  return (
    
    <div className="header-s">  

<div className="all-wrapper with-side-panel solid-bg-all">
<div class="element-wrapper">
  <div class="element-box-tp">
 
  <div className="controls-above-table">
    <div className="row">
      <div className="col-sm-6">
        <a className="btn btn-sm btn-primary" href="" onClick={()=>{
          history.push("/Create profile")
        }}>Add Profile</a>
      </div>
      <div className="col-sm-6">
        <form className="form-inline justify-content-sm-end">
          <input className="form-control form-control-sm rounded bright" placeholder="Search" type="text" /><select className="form-control form-control-sm rounded bright">
            <option selected="selected" value>
              Select Status
            </option>
            <option value="Pending">
              Pending
            </option>
            <option value="Active">
              Active
            </option>
            <option value="Cancelled">
              Cancelled
            </option>
          </select>
        </form>
      </div>
    </div>
  </div>
  <div className="table-responsive table-re">
    <table className="table table-bordered table-lg table-v2 table-striped">
      <thead>
        <tr>
          <th className="text-center">
            <input className="form-control" type="checkbox" />
          </th>
          <th>
            Profile    
          </th>
          <th>
            Description
          </th>
          <th>
          System Profile
          </th>
          <th>
            Created By
          </th>
          <th>
            Created On
          </th>
          
          <th>
            Action
          </th>
        </tr>
      </thead>
      <tbody>
      
     
      { Profile.map((profil) => {
       return(
         
          <tr key={profil.id}>
          <td className="text-center">
            
            <input className="form-control" type="checkbox" />
          </td>
          <td>
            {profil.NomProfil}
          </td>
          <td>
          {profil.ProfilDesc}
          </td>
          <td >
         { profil.ProfilSys ? (<i className="os-icon os-icon-checkmark"/>  ) : (<i className="os-icon os-icon-x"/> )}
          </td>
          <td></td>
          <td>
       {profil.DateCreat}
          </td>
          <td className="row-actions">
            <a href="#"><i className="os-icon os-icon-ui-49" onClick={()=>{
          history.push("/Editprofile/" +profil.id)
        }}/></a>
        <a href="#" > 
              <i className="os-icon os-icon-eye"/>
        </a>
        <a className="danger" href="#"onClick={()=>deleteProfile(profil.id)} >
                <i className="os-icon os-icon-ui-15" />
        </a>
          </td>
        </tr>  
 
      )})}
       
      </tbody>
    </table>
  </div>
  
  <div className="controls-below-table">
    <div className="table-records-info">
      Showing records 1 - 5
    </div>
    <div className="table-records-pages">
      <ul>
        <li>
          <a href="#">Previous</a>
        </li>
        <li>
          <a className="current" href="#">1</a>
        </li>
        <li>
          <a href="#">2</a>
        </li>
        <li>
          <a href="#">3</a>
        </li>
        <li>
          <a href="#">4</a>
        </li>
        <li>
          <a href="#">Next</a>
        </li>
      </ul>
    </div>
  </div>
 
</div>
</div></div></div>
);}
}
export default AppListProfil;
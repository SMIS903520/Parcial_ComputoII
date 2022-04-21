<template>
 
  <div style="border: 1pt solid #fbb; text-align: center;">

      <div v-for="(hobbie, i) in hobbies" v-bind:key="i">
            <div v-for="item in hobbie" v-bind:key="item">
                <table align="center">
                 <tr>
                     <th>ID</th><br/>  <br/><th>NAME</th><br/>  <br/><th>HOBBY</th><br/>    <th>SPORTS</th>
                   </tr>
                   <tr>
                      <td>{{ item.id }}</td><br/> <br/><td>{{ item.name }}</td><br/>  <br/><td>{{ item.hobby }}</td><br/>   <td>{{ item.sports }}</td> 
                   </tr>
                  <br/>
                </table>
                <br/>
                  
   
            </div>
      </div>

  </div>
   
    
</template>



<script>
import axios from 'axios'

export default {
    name: 'Hobbie',
     data(){
        return{
            
            hobbies:[],
        }
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/hobbiess')
        .then(response=>{
            this.hobbies = response.data
        })
        .catch(e=>{
            this.errors.push(e)
        })
    },
    
}
</script>


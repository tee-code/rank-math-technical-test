import { useState } from 'react';
import axios from 'axios';
import moment from 'moment';
import './index.css';
import { useEffect } from 'react';

import Chart from './Chart';

function App() {

  const [date, setDate] = useState(1);
  const [posts, setPosts] = useState([]);
  const [filteredPosts, setFilteredPosts] = useState([]);

  const handleChange = (e) => {

    const val = e.target.value;
    setDate(val);
    let type = "days";
    let num = 0;
    
    if(val === "1"){
      num = 7;
    }else if(val === "2"){
      num = 15;
    }else{
      num = 1;
      type = "months"
    }

    getPostByDate(num, type);

  }

  const fetchData = async () => {
    try {
      const result = await axios.get(`http://localhost/simple-app/wp-json/wp/v2/posts`);
      setPosts(result.data);
      console.log(result);
    } catch (error) {
      console.log(error);
    } 
  }

  const getPostByDate = (num, type) => {

    const result = posts.filter((post) => {

      let now = moment();

      // console.log(now)
      
      const post_date = moment(post.date);
      const number = now.diff(moment(post_date), type);

      if(number <= num){
        return post;
      }
      
    })

    // console.log(result);
    setFilteredPosts(result);
    
  }

  useEffect(() => {
    fetchData();
  },[]);

  return (
    <div className="App">
      <div class="card h-100">
        <div class="card-body row m-3">
          <div class="col">Graph Widget</div>
          <select value={date} class="form-select col" onChange={handleChange}>
                
                <option value="0" selected>All</option>
                <option value="1">Last 7days</option>
                <option value="2">Last 15days</option>
                <option value="3">Last 1month</option>
              </select>
          
          ` <div class="card m-2">
                <div class="card-body">
                    <Chart data = {date === "0" ? posts: filteredPosts} />
                </div>
          </div>`
        </div>
      </div>
    </div>
  );
}

export default App;

import { ResponsiveContainer, LineChart, Line, CartesianGrid, XAxis, YAxis, Tooltip } from 'recharts';
  
  export default function Chart({ data }) {
    return (
      <ResponsiveContainer width="100%" height={400}>
        <LineChart width={600} height={300} data={data} margin={{ top: 5, right: 20, bottom: 5, left: 0 }}>
            <Line type="monotone" dataKey="categories.length" stroke="#8884d8" />
            <CartesianGrid stroke="#ccc" strokeDasharray="5 5" />
            <XAxis dataKey="title.rendered" />
            <YAxis />
            <Tooltip />
        </LineChart>
      </ResponsiveContainer>
    );
  }
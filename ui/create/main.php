<form action="app/create/main" dd_submit="yes" dd_bindResult="#code">
    
    <input type="text" name="title" placeholder="Enter Title Of Assignment">
    
     <textarea name="instruction" placeholder="Details of Assignment" rows="10"></textarea>
    
    <div class="extra_details">
        
        <p>
            <label>Deadline</label>
            <input type="date" name="deadline">
        </p>
        
        <p>
            <label>Total score</label>
            <input type="number" name="score" placeholder="00">
        </p>
        
    </div>
    
    
    <div align="right">
        <input type="submit">
    </div>
    
    
</form>
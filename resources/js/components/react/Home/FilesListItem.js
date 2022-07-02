import { Grid, ListItem } from "@mui/material";
import React, { useEffect, useState } from "react";

export default function FilesListItem(props) {
    const [fileUrl,setFileUrl]=useState("");
    useEffect(() => {
      setFileUrl(props.data.original_url);
    }, [])
    
    return (
        <>
            <ListItem button onClick={()=>{props.handleListItemClick(fileUrl)}}>
                <Grid container spacing={1}>
                    <Grid xs={8} item>
                        {props.data.name}
                    </Grid>
                    <Grid xs={2} item>
                        {props.data.size < 1048576
                            ? (props.data.size / 1024).toFixed(2) + "KB"
                            : (props.data.size / 1024 / 1024).toFixed(2) + "MB"}
                    </Grid>
                    <Grid item>
                        <Grid xs={2} item>
                            {" "}
                            {new Date(props.data.created_at).toLocaleDateString()}
                        </Grid>
                    </Grid>
                </Grid>
            </ListItem>
        </>
    );
}

import { Autocomplete, Stack, TextField } from "@mui/material";
import React, { useEffect, useState } from "react";
import { createRoot } from "react-dom/client";

export default function Patient_Select() {
    const [SelectedPatient,setSelectedPatient]=useState("");
    const [search, setSearch] = useState("");
    const [PatientsData, setPatientsData] = useState([]);
    const [isLoading, setisLoading] = useState(false);
    useEffect(() => {
        axios
            .get("api/getPatientsQuery?page=", {
                params: { search: search },
            })
            .then((results) => {
                console.log(results);
                setTimeout(() => {
                    setPatientsData(results.data);
                    setisLoading(false);
                }, 500);
            });
    }, [search]);
    if (!isLoading)
        return (
            <>
                <Stack spacing={2} sx={{ width: 300 }}>
                    <Autocomplete
                        freeSolo
                        id="free-solo-2-demo"
                        disableClearable
                        onChange={(event)=>{console.log(event.target.value)}}
                        options={PatientsData}
                        
                        renderInput={(params) => (
                            <TextField
                                {...params}
                                label="Search input"
                                InputProps={{
                                    ...params.InputProps,
                                    type: "search",
                                }}
                                onChange={(event) => {
                                    setSearch(event.target.value);
                                }}
                            />
                        )}
                    />
                </Stack>
            </>
        );
}

if (document.getElementById("patient_idjax")) {
    const root = createRoot(document.getElementById("patient_idjax"));
    root.render(<Patient_Select />);
}

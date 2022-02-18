import React,{useEffect,useState} from "react";
import useStatistiques from '../../../hooks/useEvenement'
import { Helmet } from "react-helmet-async";
import { useTable, useFilters, useGlobalFilter } from "react-table";
import moment from 'moment';
import { useTranslation } from "react-i18next";
import useEvenement from "hooks/useEvenement"
import { Card, Container, Table, Form } from "react-bootstrap";

import { tableData } from "./data.js";

// This is a custom UI for our 'between' or number range
// filter. It uses two number boxes and filters rows to
// ones that have values between the two
function NumberRangeColumnFilter({
  column: { filterValue = [], preFilteredRows, setFilter, id },
}) {
  const [min, max] = React.useMemo(() => {
    let min = preFilteredRows.length ? preFilteredRows[0].values[id] : 0;
    let max = preFilteredRows.length ? preFilteredRows[0].values[id] : 0;
    preFilteredRows.forEach((row) => {
      min = Math.min(row.values[id], min);
      max = Math.max(row.values[id], max);
    });
    return [min, max];
  }, [id, preFilteredRows]);

  return (
    <div className="d-flex mt-2">
      <Form.Control
        value={filterValue[0] || ""}
        type="number"
        onChange={(e) => {
          const val = e.target.value;
          setFilter((old = []) => [
            val ? parseInt(val, 10) : undefined,
            old[1],
          ]);
        }}
        placeholder={`Min (${min})`}
        style={{
          width: "110px",
        }}
      />
      <span className="mx-2 mt-1">to</span>
      <Form.Control
        value={filterValue[1] || ""}
        type="number"
        onChange={(e) => {
          const val = e.target.value;
          setFilter((old = []) => [
            old[0],
            val ? parseInt(val, 10) : undefined,
          ]);
        }}
        placeholder={`Max (${max})`}
        style={{
          width: "110px",
        }}
      />
    </div>
  );
}

// This is a custom filter UI for selecting
// a unique option from a list
function SelectColumnFilter({
  column: { filterValue, setFilter, preFilteredRows, id },
}) {
  // Calculate the options for filtering
  // using the preFilteredRows
  const options = React.useMemo(() => {
    const options = new Set();
    preFilteredRows.forEach((row) => {
      options.add(row.values[id]);
    });
    return [...options.values()];
  }, [id, preFilteredRows]);

  // Render a multi-select box
  return (
    <Form.Select
      value={filterValue}
      onChange={(e) => {
        setFilter(e.target.value || undefined);
      }}
    >
      <option value="">All</option>
      {options.map((option, i) => (
        <option key={i} value={option}>
          {option}
        </option>
      ))}
    </Form.Select>
  );
}

function DefaultColumnFilter({
  column: { filterValue, preFilteredRows, setFilter },
}) {
  const count = preFilteredRows.length;

  return (
    <Form.Control
      value={filterValue || ""}
      onChange={(e) => {
        setFilter(e.target.value || undefined); // Set undefined to remove the filter entirely
      }}
      placeholder={`Search ${count} records...`}
      className="mt-2"
    />
  );
}

const ColumnFilteringTable = ({ columns, data }) => {
  const { t } = useTranslation();
  const { fetchCardKBM } = useEvenement();
  const filterTypes = React.useMemo(
    () => ({
      // Or, override the default text filter to use
      // "startWith"
      text: (rows, id, filterValue) => {
        return rows.filter((row) => {
          const rowValue = row.values[id];
          return rowValue !== undefined
            ? String(rowValue)
                .toLowerCase()
                .startsWith(String(filterValue).toLowerCase())
            : true;
        });
      },
    }),
    []
  );

  const defaultColumn = React.useMemo(
    () => ({
      // Let's set up our default Filter UI
      Filter: DefaultColumnFilter,
    }),
    []
  );

  const { getTableProps, getTableBodyProps, headerGroups, rows, prepareRow } =
    useTable(
      {
        columns,
        data,
        defaultColumn, // Be sure to pass the defaultColumn option
        filterTypes,
      },
      useFilters, // useFilters!
      useGlobalFilter // useGlobalFilter!
    );

    const tableRowEvents = {
      onClick: (e, row, rowIndex) => {
        console.log(`clicked on row with index: ${rowIndex}`);
      },
      onMouseEnter: (e, row, rowIndex) => {
        console.log(`enter on row with index: ${rowIndex}`);
      }
   }
   const onClick = () => {
    console.log(`clicked on row with index: `);
  }
  return (
    <Card>
      <Card.Header>
        <Card.Title tag="h5">{t("Evenements")}</Card.Title>
       {/*  <h6 className="card-subtitle text-muted">
          
        </h6> */}
      </Card.Header>
      <Card.Body>
        <Table 
        /*  rowEvents={ tableRowEvents } */
        striped bordered hover {...getTableProps()}>
          <thead>
            {headerGroups.map((headerGroup) => (
              <tr {...headerGroup.getHeaderGroupProps()}>
                {headerGroup.headers.map((column) => (
                  <th {...column.getHeaderProps()}>
                    {column.render("Header")}
                    {/* Render the columns filter UI */}
                    <div>
                      {column.canFilter ? column.render("Filter") : null}
                    </div>
                  </th>
                ))}
              </tr>
            ))}
          </thead>
          <tbody {...getTableBodyProps()}>
            {rows.map((row, i) => {
              prepareRow(row);
              return (
                <tr key={i} onClick={() => fetchCardKBM(row.original.id)} {...row.getRowProps()}>
                  {row.cells.map((cell) => {
                    return (
                      <td  {...cell.getCellProps()}>{cell.render("Cell")}</td>
                    );
                  })}
                </tr>
              );
            })}
          </tbody>
        </Table>
      </Card.Body>
    </Card>
  );
};

const tableColumns = [
  {
    Header: "Nom ",
    accessor: "name",
  },
  {
    Header: "Lieu",
    accessor: "position",
    Filter: SelectColumnFilter,
    filter: "includes",
  },
  {
    Header: "Début",
    accessor: "office",
    Filter: SelectColumnFilter,
    filter: "includes",
  },
  {
    Header: "Fin",
    accessor: "age",
    /* Filter: NumberRangeColumnFilter,
    filter: "between", */
  },
  {
    Header: "Heure de Début",
    accessor: "startDate",
  },
  {
    Header: "Heure de Fin",
    accessor: "salary",
    Filter: false,
  },
];

const ColumnFiltering = () => { 
  
  const [state, setstate] = useState(tableData)
 // const { t } = useTranslation();
  //const user = JSON.parse(sessionStorage.getItem("session"));
  const {fetchTabKBM, tab2}   = useStatistiques()

  useEffect(() => {

    const tableau = []
       
    if (tab2[0]){
     
      tab2.map( (data,index) => {
        const tableauDeDonnee = {...tableau}
        tableauDeDonnee.index = index 
        tableauDeDonnee.id = data.idevent
        tableauDeDonnee.name = data.libevent    
        tableauDeDonnee.position = data.nomville
        tableauDeDonnee.office = moment(data.debutevent).format('ll')
        tableauDeDonnee.age = moment(data.finevent).format('ll')
        tableauDeDonnee.startDate = data.debutevent_hr
        tableauDeDonnee.salary = data.finevent_hr

        tableau.push(tableauDeDonnee)
      }) 
      setstate(tableau)
    }else {
      fetchTabKBM()
    }
    
  }, [tab2])
  
  const tableRowEvents = {
    onClick: (e, row, rowIndex) => {
      console.log(`clicked on row with index: ${rowIndex}`);
    },
    onMouseEnter: (e, row, rowIndex) => {
      console.log(`enter on row with index: ${rowIndex}`);
    }
 }
 const onClick = (e, row, rowIndex) => {
  console.log(`clicked on row with index: ${rowIndex}`);
}
  return(
  <React.Fragment >
    <Helmet title="Column Filtering" />
    <Container fluid className="p-0 ">
      <ColumnFilteringTable
        columns={tableColumns}
        keyField={state}
        /* rowEvents={ tableRowEvents } */
        /* onClick = {() => onClick()} */
        
        data={state/* .slice(0, 15) */}
      />
    </Container>
  </React.Fragment>
)
}

export default ColumnFiltering;

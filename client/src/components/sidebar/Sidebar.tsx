import React from "react";

import PerfectScrollbar from "react-perfect-scrollbar";

import useSidebar from "../../hooks/useSidebar";
import SidebarFooter from "./SidebarFooter";
import SidebarNav from "./SidebarNav";
import { ReactComponent as Logo } from "../../assets/img/logo.svg";
import Logoo from "../../assets/img/logoo.png";

const Sidebar = ({ items, showFooter = true }) => {
	const { isOpen } = useSidebar();

	return (
		<nav className={`sidebar ${!isOpen ? "collapsed" : ""}`}>
			<div className="sidebar-content">
				<PerfectScrollbar>
					<a className="sidebar-brand" href="/">
						{/* <Logo /> <span className="align-middle me-3">AppStack</span> className="rounded-circle me-2"*/}
						<img src={Logoo}  style={{ height:"100px", width: "100px", borderRadius: "10px"}}/>
					</a>

					<SidebarNav items={items} />
					{!!showFooter && <SidebarFooter />}
				</PerfectScrollbar>
			</div>
		</nav>
	);
};

export default Sidebar;

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace GPBMetadata\Google\Cloud\Vmwareengine\V1;

class Vmwareengine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\FieldInfo::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\VmwareengineResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
��
/google/cloud/vmwareengine/v1/vmwareengine.protogoogle.cloud.vmwareengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/field_info.protogoogle/api/resource.proto9google/cloud/vmwareengine/v1/vmwareengine_resources.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
ListPrivateCloudsRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListPrivateCloudsResponseB
private_clouds (2*.google.cloud.vmwareengine.v1.PrivateCloud
next_page_token (	
unreachable (	"X
GetPrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"�
CreatePrivateCloudRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
private_cloud_id (	B�AF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A

request_id (	B�A
validate_only (B�A"�
UpdatePrivateCloudRequestF
private_cloud (2*.google.cloud.vmwareengine.v1.PrivateCloudB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
DeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A
force (B�A
delay_hours (B�AH �B
_delay_hours"v
UndeletePrivateCloudRequest>
name (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ListClustersRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"}
ListClustersResponse7
clusters (2%.google.cloud.vmwareengine.v1.Cluster
next_page_token (	
unreachable (	"N
GetClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster"�
CreateClusterRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

cluster_id (	B�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A;
cluster (2%.google.cloud.vmwareengine.v1.ClusterB�A

request_id (	B�A
validate_only (B�A"j
DeleteClusterRequest9
name (	B+�A�A%
#vmwareengine.googleapis.com/Cluster

request_id (	B�A"v
ListNodesRequest;
parent (	B+�A�A%
#vmwareengine.googleapis.com/Cluster
	page_size (

page_token (	"_
ListNodesResponse1
nodes (2".google.cloud.vmwareengine.v1.Node
next_page_token (	"H
GetNodeRequest6
name (	B(�A�A"
 vmwareengine.googleapis.com/Node"�
ListExternalAddressesRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"�
ListExternalAddressesResponseI
external_addresses (2-.google.cloud.vmwareengine.v1.ExternalAddress
next_page_token (	
unreachable (	"�
*FetchNetworkPolicyExternalAddressesRequestI
network_policy (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy
	page_size (

page_token (	"�
+FetchNetworkPolicyExternalAddressesResponseI
external_addresses (2-.google.cloud.vmwareengine.v1.ExternalAddress
next_page_token (	"^
GetExternalAddressRequestA
name (	B3�A�A-
+vmwareengine.googleapis.com/ExternalAddress"�
CreateExternalAddressRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloudL
external_address (2-.google.cloud.vmwareengine.v1.ExternalAddressB�A 
external_address_id (	B�A

request_id (	B�A"�
UpdateExternalAddressRequest4
update_mask (2.google.protobuf.FieldMaskB�AL
external_address (2-.google.cloud.vmwareengine.v1.ExternalAddressB�A

request_id (	B�A"z
DeleteExternalAddressRequestA
name (	B3�A�A-
+vmwareengine.googleapis.com/ExternalAddress

request_id (	B�A"}
ListSubnetsRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"z
ListSubnetsResponse5
subnets (2$.google.cloud.vmwareengine.v1.Subnet
next_page_token (	
unreachable (	"L
GetSubnetRequest8
name (	B*�A�A$
"vmwareengine.googleapis.com/Subnet"�
UpdateSubnetRequest4
update_mask (2.google.protobuf.FieldMaskB�A9
subnet (2$.google.cloud.vmwareengine.v1.SubnetB�A"�
ListExternalAccessRulesRequestA
parent (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy
	page_size (

page_token (	
filter (	
order_by (	"�
ListExternalAccessRulesResponseO
external_access_rules (20.google.cloud.vmwareengine.v1.ExternalAccessRule
next_page_token (	
unreachable (	"d
GetExternalAccessRuleRequestD
name (	B6�A�A0
.vmwareengine.googleapis.com/ExternalAccessRule"�
CreateExternalAccessRuleRequestA
parent (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicyS
external_access_rule (20.google.cloud.vmwareengine.v1.ExternalAccessRuleB�A$
external_access_rule_id (	B�A

request_id (	"�
UpdateExternalAccessRuleRequest4
update_mask (2.google.protobuf.FieldMaskB�AS
external_access_rule (20.google.cloud.vmwareengine.v1.ExternalAccessRuleB�A

request_id (	B�A"�
DeleteExternalAccessRuleRequestD
name (	B6�A�A0
.vmwareengine.googleapis.com/ExternalAccessRule

request_id (	B�A"�
ListLoggingServersRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"�
ListLoggingServersResponseD
logging_servers (2+.google.cloud.vmwareengine.v1.LoggingServer
next_page_token (	
unreachable (	"Z
GetLoggingServerRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/LoggingServer"�
CreateLoggingServerRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloudH
logging_server (2+.google.cloud.vmwareengine.v1.LoggingServerB�A
logging_server_id (	B�A

request_id (	B�A"�
UpdateLoggingServerRequest4
update_mask (2.google.protobuf.FieldMaskB�AH
logging_server (2+.google.cloud.vmwareengine.v1.LoggingServerB�A

request_id (	B�A"v
DeleteLoggingServerRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/LoggingServer

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A"�
ListNodeTypesRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	"�
ListNodeTypesResponse:

node_types (2&.google.cloud.vmwareengine.v1.NodeType
next_page_token (	
unreachable (	"P
GetNodeTypeRequest:
name (	B,�A�A&
$vmwareengine.googleapis.com/NodeType"d
ShowNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud"
ShowVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
username (	B�A"~
ResetNsxCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A"�
ResetVcenterCredentialsRequestG
private_cloud (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud

request_id (	B�A
username (	B�A"�
ListHcxActivationKeysResponseK
hcx_activation_keys (2..google.cloud.vmwareengine.v1.HcxActivationKey
next_page_token (	
unreachable (	"�
ListHcxActivationKeysRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	"`
GetHcxActivationKeyRequestB
name (	B4�A�A.
,vmwareengine.googleapis.com/HcxActivationKey"�
CreateHcxActivationKeyRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloudO
hcx_activation_key (2..google.cloud.vmwareengine.v1.HcxActivationKeyB�A"
hcx_activation_key_id (	B�A

request_id (	"Z
GetDnsForwardingRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/DnsForwarding"�
UpdateDnsForwardingRequestH
dns_forwarding (2+.google.cloud.vmwareengine.v1.DnsForwardingB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
CreateNetworkPeeringRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
network_peering_id (	B�AJ
network_peering (2,.google.cloud.vmwareengine.v1.NetworkPeeringB�A

request_id (	B�A"x
DeleteNetworkPeeringRequest@
name (	B2�A�A,
*vmwareengine.googleapis.com/NetworkPeering

request_id (	B�A"\\
GetNetworkPeeringRequest@
name (	B2�A�A,
*vmwareengine.googleapis.com/NetworkPeering"�
ListNetworkPeeringsRequestB
parent (	B2�A�A,*vmwareengine.googleapis.com/NetworkPeering
	page_size (

page_token (	
filter (	
order_by (	"�
UpdateNetworkPeeringRequestJ
network_peering (2,.google.cloud.vmwareengine.v1.NetworkPeeringB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
ListNetworkPeeringsResponseF
network_peerings (2,.google.cloud.vmwareengine.v1.NetworkPeering
next_page_token (	
unreachable (	"�
ListPeeringRoutesRequestB
parent (	B2�A�A,
*vmwareengine.googleapis.com/NetworkPeering
	page_size (

page_token (	
filter (	"x
ListPeeringRoutesResponseB
peering_routes (2*.google.cloud.vmwareengine.v1.PeeringRoute
next_page_token (	"�
ListNetworkPoliciesRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
	page_size (

page_token (	
filter (	
order_by (	"�
ListNetworkPoliciesResponseE
network_policies (2+.google.cloud.vmwareengine.v1.NetworkPolicy
next_page_token (	
unreachable (	"Z
GetNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy"�
UpdateNetworkPolicyRequestH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
CreateNetworkPolicyRequestA
parent (	B1�A�A+)vmwareengine.googleapis.com/NetworkPolicy
network_policy_id (	B�AH
network_policy (2+.google.cloud.vmwareengine.v1.NetworkPolicyB�A

request_id (	B�A"v
DeleteNetworkPolicyRequest?
name (	B1�A�A+
)vmwareengine.googleapis.com/NetworkPolicy

request_id (	B�A"�
$ListManagementDnsZoneBindingsRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud
	page_size (

page_token (	
filter (	
order_by (	"�
%ListManagementDnsZoneBindingsResponse\\
management_dns_zone_bindings (26.google.cloud.vmwareengine.v1.ManagementDnsZoneBinding
next_page_token (	
unreachable (	"p
"GetManagementDnsZoneBindingRequestJ
name (	B<�A�A6
4vmwareengine.googleapis.com/ManagementDnsZoneBinding"�
%CreateManagementDnsZoneBindingRequest@
parent (	B0�A�A*
(vmwareengine.googleapis.com/PrivateCloud`
management_dns_zone_binding (26.google.cloud.vmwareengine.v1.ManagementDnsZoneBindingB�A+
management_dns_zone_binding_id (	B�A

request_id (	B�A"�
%UpdateManagementDnsZoneBindingRequest4
update_mask (2.google.protobuf.FieldMaskB�A`
management_dns_zone_binding (26.google.cloud.vmwareengine.v1.ManagementDnsZoneBindingB�A

request_id (	B�A"�
%DeleteManagementDnsZoneBindingRequestJ
name (	B<�A�A6
4vmwareengine.googleapis.com/ManagementDnsZoneBinding

request_id (	B�A"�
%RepairManagementDnsZoneBindingRequestJ
name (	B<�A�A6
4vmwareengine.googleapis.com/ManagementDnsZoneBinding

request_id (	B�A"�
 CreateVmwareEngineNetworkRequestG
parent (	B7�A�A1/vmwareengine.googleapis.com/VmwareEngineNetwork%
vmware_engine_network_id (	B�AU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A

request_id (	B�A"�
 UpdateVmwareEngineNetworkRequestU
vmware_engine_network (21.google.cloud.vmwareengine.v1.VmwareEngineNetworkB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"�
 DeleteVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork

request_id (	B�A
etag (	B�A"f
GetVmwareEngineNetworkRequestE
name (	B7�A�A1
/vmwareengine.googleapis.com/VmwareEngineNetwork"�
ListVmwareEngineNetworksRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
 ListVmwareEngineNetworksResponseQ
vmware_engine_networks (21.google.cloud.vmwareengine.v1.VmwareEngineNetwork
next_page_token (	
unreachable (	"�
CreatePrivateConnectionRequestE
parent (	B5�A�A/-vmwareengine.googleapis.com/PrivateConnection"
private_connection_id (	B�AP
private_connection (2/.google.cloud.vmwareengine.v1.PrivateConnectionB�A

request_id (	B�A"b
GetPrivateConnectionRequestC
name (	B5�A�A/
-vmwareengine.googleapis.com/PrivateConnection"�
ListPrivateConnectionsRequestE
parent (	B5�A�A/-vmwareengine.googleapis.com/PrivateConnection
	page_size (

page_token (	
filter (	
order_by (	"�
ListPrivateConnectionsResponseL
private_connections (2/.google.cloud.vmwareengine.v1.PrivateConnection
next_page_token (	
unreachable (	"�
UpdatePrivateConnectionRequestP
private_connection (2/.google.cloud.vmwareengine.v1.PrivateConnectionB�A4
update_mask (2.google.protobuf.FieldMaskB�A

request_id (	B�A"~
DeletePrivateConnectionRequestC
name (	B5�A�A/
-vmwareengine.googleapis.com/PrivateConnection

request_id (	B�A"�
)ListPrivateConnectionPeeringRoutesRequestE
parent (	B5�A�A/
-vmwareengine.googleapis.com/PrivateConnection
	page_size (

page_token (	"�
*ListPrivateConnectionPeeringRoutesResponseB
peering_routes (2*.google.cloud.vmwareengine.v1.PeeringRoute
next_page_token (	"�
GrantDnsBindPermissionRequestC
name (	B5�A�A/
-vmwareengine.googleapis.com/DnsBindPermission?
	principal (2\'.google.cloud.vmwareengine.v1.PrincipalB�A

request_id (	B�A"�
RevokeDnsBindPermissionRequestC
name (	B5�A�A/
-vmwareengine.googleapis.com/DnsBindPermission?
	principal (2\'.google.cloud.vmwareengine.v1.PrincipalB�A

request_id (	B�A"b
GetDnsBindPermissionRequestC
name (	B5�A�A/
-vmwareengine.googleapis.com/DnsBindPermission2܎
VmwareEngine�
ListPrivateClouds6.google.cloud.vmwareengine.v1.ListPrivateCloudsRequest7.google.cloud.vmwareengine.v1.ListPrivateCloudsResponse"B�Aparent���31/v1/{parent=projects/*/locations/*}/privateClouds�
GetPrivateCloud4.google.cloud.vmwareengine.v1.GetPrivateCloudRequest*.google.cloud.vmwareengine.v1.PrivateCloud"@�Aname���31/v1/{name=projects/*/locations/*/privateClouds/*}�
CreatePrivateCloud7.google.cloud.vmwareengine.v1.CreatePrivateCloudRequest.google.longrunning.Operation"��A!
PrivateCloudOperationMetadata�A%parent,private_cloud,private_cloud_id���B"1/v1/{parent=projects/*/locations/*}/privateClouds:private_cloud�
UpdatePrivateCloud7.google.cloud.vmwareengine.v1.UpdatePrivateCloudRequest.google.longrunning.Operation"��A!
PrivateCloudOperationMetadata�Aprivate_cloud,update_mask���P2?/v1/{private_cloud.name=projects/*/locations/*/privateClouds/*}:private_cloud�
DeletePrivateCloud7.google.cloud.vmwareengine.v1.DeletePrivateCloudRequest.google.longrunning.Operation"d�A!
PrivateCloudOperationMetadata�Aname���3*1/v1/{name=projects/*/locations/*/privateClouds/*}�
UndeletePrivateCloud9.google.cloud.vmwareengine.v1.UndeletePrivateCloudRequest.google.longrunning.Operation"p�A!
PrivateCloudOperationMetadata�Aname���?":/v1/{name=projects/*/locations/*/privateClouds/*}:undelete:*�
ListClusters1.google.cloud.vmwareengine.v1.ListClustersRequest2.google.cloud.vmwareengine.v1.ListClustersResponse"M�Aparent���></v1/{parent=projects/*/locations/*/privateClouds/*}/clusters�

GetCluster/.google.cloud.vmwareengine.v1.GetClusterRequest%.google.cloud.vmwareengine.v1.Cluster"K�Aname���></v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�
CreateCluster2.google.cloud.vmwareengine.v1.CreateClusterRequest.google.longrunning.Operation"��A
ClusterOperationMetadata�Aparent,cluster,cluster_id���G"</v1/{parent=projects/*/locations/*/privateClouds/*}/clusters:cluster�
UpdateCluster2.google.cloud.vmwareengine.v1.UpdateClusterRequest.google.longrunning.Operation"��A
ClusterOperationMetadata�Acluster,update_mask���O2D/v1/{cluster.name=projects/*/locations/*/privateClouds/*/clusters/*}:cluster�
DeleteCluster2.google.cloud.vmwareengine.v1.DeleteClusterRequest.google.longrunning.Operation"x�A*
google.protobuf.EmptyOperationMetadata�Aname���>*</v1/{name=projects/*/locations/*/privateClouds/*/clusters/*}�
	ListNodes..google.cloud.vmwareengine.v1.ListNodesRequest/.google.cloud.vmwareengine.v1.ListNodesResponse"U�Aparent���FD/v1/{parent=projects/*/locations/*/privateClouds/*/clusters/*}/nodes�
GetNode,.google.cloud.vmwareengine.v1.GetNodeRequest".google.cloud.vmwareengine.v1.Node"S�Aname���FD/v1/{name=projects/*/locations/*/privateClouds/*/clusters/*/nodes/*}�
ListExternalAddresses:.google.cloud.vmwareengine.v1.ListExternalAddressesRequest;.google.cloud.vmwareengine.v1.ListExternalAddressesResponse"V�Aparent���GE/v1/{parent=projects/*/locations/*/privateClouds/*}/externalAddresses�
#FetchNetworkPolicyExternalAddressesH.google.cloud.vmwareengine.v1.FetchNetworkPolicyExternalAddressesRequestI.google.cloud.vmwareengine.v1.FetchNetworkPolicyExternalAddressesResponse"m�Anetwork_policy���VT/v1/{network_policy=projects/*/locations/*/networkPolicies/*}:fetchExternalAddresses�
GetExternalAddress7.google.cloud.vmwareengine.v1.GetExternalAddressRequest-.google.cloud.vmwareengine.v1.ExternalAddress"T�Aname���GE/v1/{name=projects/*/locations/*/privateClouds/*/externalAddresses/*}�
CreateExternalAddress:.google.cloud.vmwareengine.v1.CreateExternalAddressRequest.google.longrunning.Operation"��A$
ExternalAddressOperationMetadata�A+parent,external_address,external_address_id���Y"E/v1/{parent=projects/*/locations/*/privateClouds/*}/externalAddresses:external_address�
UpdateExternalAddress:.google.cloud.vmwareengine.v1.UpdateExternalAddressRequest.google.longrunning.Operation"��A$
ExternalAddressOperationMetadata�Aexternal_address,update_mask���j2V/v1/{external_address.name=projects/*/locations/*/privateClouds/*/externalAddresses/*}:external_address�
DeleteExternalAddress:.google.cloud.vmwareengine.v1.DeleteExternalAddressRequest.google.longrunning.Operation"��A*
google.protobuf.EmptyOperationMetadata�Aname���G*E/v1/{name=projects/*/locations/*/privateClouds/*/externalAddresses/*}�
ListSubnets0.google.cloud.vmwareengine.v1.ListSubnetsRequest1.google.cloud.vmwareengine.v1.ListSubnetsResponse"L�Aparent���=;/v1/{parent=projects/*/locations/*/privateClouds/*}/subnets�
	GetSubnet..google.cloud.vmwareengine.v1.GetSubnetRequest$.google.cloud.vmwareengine.v1.Subnet"J�Aname���=;/v1/{name=projects/*/locations/*/privateClouds/*/subnets/*}�
UpdateSubnet1.google.cloud.vmwareengine.v1.UpdateSubnetRequest.google.longrunning.Operation"��A
SubnetOperationMetadata�Asubnet,update_mask���L2B/v1/{subnet.name=projects/*/locations/*/privateClouds/*/subnets/*}:subnet�
ListExternalAccessRules<.google.cloud.vmwareengine.v1.ListExternalAccessRulesRequest=.google.cloud.vmwareengine.v1.ListExternalAccessRulesResponse"Z�Aparent���KI/v1/{parent=projects/*/locations/*/networkPolicies/*}/externalAccessRules�
GetExternalAccessRule:.google.cloud.vmwareengine.v1.GetExternalAccessRuleRequest0.google.cloud.vmwareengine.v1.ExternalAccessRule"X�Aname���KI/v1/{name=projects/*/locations/*/networkPolicies/*/externalAccessRules/*}�
CreateExternalAccessRule=.google.cloud.vmwareengine.v1.CreateExternalAccessRuleRequest.google.longrunning.Operation"��A\'
ExternalAccessRuleOperationMetadata�A3parent,external_access_rule,external_access_rule_id���a"I/v1/{parent=projects/*/locations/*/networkPolicies/*}/externalAccessRules:external_access_rule�
UpdateExternalAccessRule=.google.cloud.vmwareengine.v1.UpdateExternalAccessRuleRequest.google.longrunning.Operation"��A\'
ExternalAccessRuleOperationMetadata�A external_access_rule,update_mask���v2^/v1/{external_access_rule.name=projects/*/locations/*/networkPolicies/*/externalAccessRules/*}:external_access_rule�
DeleteExternalAccessRule=.google.cloud.vmwareengine.v1.DeleteExternalAccessRuleRequest.google.longrunning.Operation"��A*
google.protobuf.EmptyOperationMetadata�Aname���K*I/v1/{name=projects/*/locations/*/networkPolicies/*/externalAccessRules/*}�
ListLoggingServers7.google.cloud.vmwareengine.v1.ListLoggingServersRequest8.google.cloud.vmwareengine.v1.ListLoggingServersResponse"S�Aparent���DB/v1/{parent=projects/*/locations/*/privateClouds/*}/loggingServers�
GetLoggingServer5.google.cloud.vmwareengine.v1.GetLoggingServerRequest+.google.cloud.vmwareengine.v1.LoggingServer"Q�Aname���DB/v1/{name=projects/*/locations/*/privateClouds/*/loggingServers/*}�
CreateLoggingServer8.google.cloud.vmwareengine.v1.CreateLoggingServerRequest.google.longrunning.Operation"��A"
LoggingServerOperationMetadata�A\'parent,logging_server,logging_server_id���T"B/v1/{parent=projects/*/locations/*/privateClouds/*}/loggingServers:logging_server�
UpdateLoggingServer8.google.cloud.vmwareengine.v1.UpdateLoggingServerRequest.google.longrunning.Operation"��A"
LoggingServerOperationMetadata�Alogging_server,update_mask���c2Q/v1/{logging_server.name=projects/*/locations/*/privateClouds/*/loggingServers/*}:logging_server�
DeleteLoggingServer8.google.cloud.vmwareengine.v1.DeleteLoggingServerRequest.google.longrunning.Operation"~�A*
google.protobuf.EmptyOperationMetadata�Aname���D*B/v1/{name=projects/*/locations/*/privateClouds/*/loggingServers/*}�
ListNodeTypes2.google.cloud.vmwareengine.v1.ListNodeTypesRequest3.google.cloud.vmwareengine.v1.ListNodeTypesResponse">�Aparent���/-/v1/{parent=projects/*/locations/*}/nodeTypes�
GetNodeType0.google.cloud.vmwareengine.v1.GetNodeTypeRequest&.google.cloud.vmwareengine.v1.NodeType"<�Aname���/-/v1/{name=projects/*/locations/*/nodeTypes/*}�
ShowNsxCredentials7.google.cloud.vmwareengine.v1.ShowNsxCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"e�Aprivate_cloud���OM/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showNsxCredentials�
ShowVcenterCredentials;.google.cloud.vmwareengine.v1.ShowVcenterCredentialsRequest).google.cloud.vmwareengine.v1.Credentials"i�Aprivate_cloud���SQ/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:showVcenterCredentials�
ResetNsxCredentials8.google.cloud.vmwareengine.v1.ResetNsxCredentialsRequest.google.longrunning.Operation"��A!
PrivateCloudOperationMetadata�Aprivate_cloud���S"N/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetNsxCredentials:*�
ResetVcenterCredentials<.google.cloud.vmwareengine.v1.ResetVcenterCredentialsRequest.google.longrunning.Operation"��A!
PrivateCloudOperationMetadata�Aprivate_cloud���W"R/v1/{private_cloud=projects/*/locations/*/privateClouds/*}:resetVcenterCredentials:*�
GetDnsForwarding5.google.cloud.vmwareengine.v1.GetDnsForwardingRequest+.google.cloud.vmwareengine.v1.DnsForwarding"N�Aname���A?/v1/{name=projects/*/locations/*/privateClouds/*/dnsForwarding}�
UpdateDnsForwarding8.google.cloud.vmwareengine.v1.UpdateDnsForwardingRequest.google.longrunning.Operation"��A"
DnsForwardingOperationMetadata�Adns_forwarding,update_mask���`2N/v1/{dns_forwarding.name=projects/*/locations/*/privateClouds/*/dnsForwarding}:dns_forwarding�
GetNetworkPeering6.google.cloud.vmwareengine.v1.GetNetworkPeeringRequest,.google.cloud.vmwareengine.v1.NetworkPeering"B�Aname���53/v1/{name=projects/*/locations/*/networkPeerings/*}�
ListNetworkPeerings8.google.cloud.vmwareengine.v1.ListNetworkPeeringsRequest9.google.cloud.vmwareengine.v1.ListNetworkPeeringsResponse"D�Aparent���53/v1/{parent=projects/*/locations/*}/networkPeerings�
CreateNetworkPeering9.google.cloud.vmwareengine.v1.CreateNetworkPeeringRequest.google.longrunning.Operation"��A#
NetworkPeeringOperationMetadata�A)parent,network_peering,network_peering_id���F"3/v1/{parent=projects/*/locations/*}/networkPeerings:network_peering�
DeleteNetworkPeering9.google.cloud.vmwareengine.v1.DeleteNetworkPeeringRequest.google.longrunning.Operation"o�A*
google.protobuf.EmptyOperationMetadata�Aname���5*3/v1/{name=projects/*/locations/*/networkPeerings/*}�
UpdateNetworkPeering9.google.cloud.vmwareengine.v1.UpdateNetworkPeeringRequest.google.longrunning.Operation"��A#
NetworkPeeringOperationMetadata�Anetwork_peering,update_mask���V2C/v1/{network_peering.name=projects/*/locations/*/networkPeerings/*}:network_peering�
ListPeeringRoutes6.google.cloud.vmwareengine.v1.ListPeeringRoutesRequest7.google.cloud.vmwareengine.v1.ListPeeringRoutesResponse"T�Aparent���EC/v1/{parent=projects/*/locations/*/networkPeerings/*}/peeringRoutes�
CreateHcxActivationKey;.google.cloud.vmwareengine.v1.CreateHcxActivationKeyRequest.google.longrunning.Operation"��A%
HcxActivationKeyOperationMetadata�A/parent,hcx_activation_key,hcx_activation_key_id���["E/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys:hcx_activation_key�
ListHcxActivationKeys:.google.cloud.vmwareengine.v1.ListHcxActivationKeysRequest;.google.cloud.vmwareengine.v1.ListHcxActivationKeysResponse"V�Aparent���GE/v1/{parent=projects/*/locations/*/privateClouds/*}/hcxActivationKeys�
GetHcxActivationKey8.google.cloud.vmwareengine.v1.GetHcxActivationKeyRequest..google.cloud.vmwareengine.v1.HcxActivationKey"T�Aname���GE/v1/{name=projects/*/locations/*/privateClouds/*/hcxActivationKeys/*}�
GetNetworkPolicy5.google.cloud.vmwareengine.v1.GetNetworkPolicyRequest+.google.cloud.vmwareengine.v1.NetworkPolicy"B�Aname���53/v1/{name=projects/*/locations/*/networkPolicies/*}�
ListNetworkPolicies8.google.cloud.vmwareengine.v1.ListNetworkPoliciesRequest9.google.cloud.vmwareengine.v1.ListNetworkPoliciesResponse"D�Aparent���53/v1/{parent=projects/*/locations/*}/networkPolicies�
CreateNetworkPolicy8.google.cloud.vmwareengine.v1.CreateNetworkPolicyRequest.google.longrunning.Operation"��A"
NetworkPolicyOperationMetadata�A\'parent,network_policy,network_policy_id���E"3/v1/{parent=projects/*/locations/*}/networkPolicies:network_policy�
UpdateNetworkPolicy8.google.cloud.vmwareengine.v1.UpdateNetworkPolicyRequest.google.longrunning.Operation"��A"
NetworkPolicyOperationMetadata�Anetwork_policy,update_mask���T2B/v1/{network_policy.name=projects/*/locations/*/networkPolicies/*}:network_policy�
DeleteNetworkPolicy8.google.cloud.vmwareengine.v1.DeleteNetworkPolicyRequest.google.longrunning.Operation"o�A*
google.protobuf.EmptyOperationMetadata�Aname���5*3/v1/{name=projects/*/locations/*/networkPolicies/*}�
ListManagementDnsZoneBindingsB.google.cloud.vmwareengine.v1.ListManagementDnsZoneBindingsRequestC.google.cloud.vmwareengine.v1.ListManagementDnsZoneBindingsResponse"^�Aparent���OM/v1/{parent=projects/*/locations/*/privateClouds/*}/managementDnsZoneBindings�
GetManagementDnsZoneBinding@.google.cloud.vmwareengine.v1.GetManagementDnsZoneBindingRequest6.google.cloud.vmwareengine.v1.ManagementDnsZoneBinding"\\�Aname���OM/v1/{name=projects/*/locations/*/privateClouds/*/managementDnsZoneBindings/*}�
CreateManagementDnsZoneBindingC.google.cloud.vmwareengine.v1.CreateManagementDnsZoneBindingRequest.google.longrunning.Operation"��A-
ManagementDnsZoneBindingOperationMetadata�AAparent,management_dns_zone_binding,management_dns_zone_binding_id���l"M/v1/{parent=projects/*/locations/*/privateClouds/*}/managementDnsZoneBindings:management_dns_zone_binding�
UpdateManagementDnsZoneBindingC.google.cloud.vmwareengine.v1.UpdateManagementDnsZoneBindingRequest.google.longrunning.Operation"��A-
ManagementDnsZoneBindingOperationMetadata�A\'management_dns_zone_binding,update_mask����2i/v1/{management_dns_zone_binding.name=projects/*/locations/*/privateClouds/*/managementDnsZoneBindings/*}:management_dns_zone_binding�
DeleteManagementDnsZoneBindingC.google.cloud.vmwareengine.v1.DeleteManagementDnsZoneBindingRequest.google.longrunning.Operation"��A*
google.protobuf.EmptyOperationMetadata�Aname���O*M/v1/{name=projects/*/locations/*/privateClouds/*/managementDnsZoneBindings/*}�
RepairManagementDnsZoneBindingC.google.cloud.vmwareengine.v1.RepairManagementDnsZoneBindingRequest.google.longrunning.Operation"��A-
ManagementDnsZoneBindingOperationMetadata�Aname���Y"T/v1/{name=projects/*/locations/*/privateClouds/*/managementDnsZoneBindings/*}:repair:*�
CreateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.CreateVmwareEngineNetworkRequest.google.longrunning.Operation"��A(
VmwareEngineNetworkOperationMetadata�A5parent,vmware_engine_network,vmware_engine_network_id���Q"8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks:vmware_engine_network�
UpdateVmwareEngineNetwork>.google.cloud.vmwareengine.v1.UpdateVmwareEngineNetworkRequest.google.longrunning.Operation"��A(
VmwareEngineNetworkOperationMetadata�A!vmware_engine_network,update_mask���g2N/v1/{vmware_engine_network.name=projects/*/locations/*/vmwareEngineNetworks/*}:vmware_engine_network�
DeleteVmwareEngineNetwork>.google.cloud.vmwareengine.v1.DeleteVmwareEngineNetworkRequest.google.longrunning.Operation"t�A*
google.protobuf.EmptyOperationMetadata�Aname���:*8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�
GetVmwareEngineNetwork;.google.cloud.vmwareengine.v1.GetVmwareEngineNetworkRequest1.google.cloud.vmwareengine.v1.VmwareEngineNetwork"G�Aname���:8/v1/{name=projects/*/locations/*/vmwareEngineNetworks/*}�
ListVmwareEngineNetworks=.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksRequest>.google.cloud.vmwareengine.v1.ListVmwareEngineNetworksResponse"I�Aparent���:8/v1/{parent=projects/*/locations/*}/vmwareEngineNetworks�
CreatePrivateConnection<.google.cloud.vmwareengine.v1.CreatePrivateConnectionRequest.google.longrunning.Operation"��A&
PrivateConnectionOperationMetadata�A/parent,private_connection,private_connection_id���L"6/v1/{parent=projects/*/locations/*}/privateConnections:private_connection�
GetPrivateConnection9.google.cloud.vmwareengine.v1.GetPrivateConnectionRequest/.google.cloud.vmwareengine.v1.PrivateConnection"E�Aname���86/v1/{name=projects/*/locations/*/privateConnections/*}�
ListPrivateConnections;.google.cloud.vmwareengine.v1.ListPrivateConnectionsRequest<.google.cloud.vmwareengine.v1.ListPrivateConnectionsResponse"G�Aparent���86/v1/{parent=projects/*/locations/*}/privateConnections�
UpdatePrivateConnection<.google.cloud.vmwareengine.v1.UpdatePrivateConnectionRequest.google.longrunning.Operation"��A&
PrivateConnectionOperationMetadata�Aprivate_connection,update_mask���_2I/v1/{private_connection.name=projects/*/locations/*/privateConnections/*}:private_connection�
DeletePrivateConnection<.google.cloud.vmwareengine.v1.DeletePrivateConnectionRequest.google.longrunning.Operation"r�A*
google.protobuf.EmptyOperationMetadata�Aname���8*6/v1/{name=projects/*/locations/*/privateConnections/*}�
"ListPrivateConnectionPeeringRoutesG.google.cloud.vmwareengine.v1.ListPrivateConnectionPeeringRoutesRequestH.google.cloud.vmwareengine.v1.ListPrivateConnectionPeeringRoutesResponse"W�Aparent���HF/v1/{parent=projects/*/locations/*/privateConnections/*}/peeringRoutes�
GrantDnsBindPermission;.google.cloud.vmwareengine.v1.GrantDnsBindPermissionRequest.google.longrunning.Operation"~�A&
DnsBindPermissionOperationMetadata�Aname,principal���>"9/v1/{name=projects/*/locations/*/dnsBindPermission}:grant:*�
GetDnsBindPermission9.google.cloud.vmwareengine.v1.GetDnsBindPermissionRequest/.google.cloud.vmwareengine.v1.DnsBindPermission"B�Aname���53/v1/{name=projects/*/locations/*/dnsBindPermission}�
RevokeDnsBindPermission<.google.cloud.vmwareengine.v1.RevokeDnsBindPermissionRequest.google.longrunning.Operation"�A&
DnsBindPermissionOperationMetadata�Aname,principal���?":/v1/{name=projects/*/locations/*/dnsBindPermission}:revoke:*O�Avmwareengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
 com.google.cloud.vmwareengine.v1BVmwareengineProtoPZDcloud.google.com/go/vmwareengine/apiv1/vmwareenginepb;vmwareenginepb�Google.Cloud.VmwareEngine.V1�Google\\Cloud\\VmwareEngine\\V1�Google::Cloud::VmwareEngine::V1�AN
compute.googleapis.com/Network,projects/{project}/global/networks/{network}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

